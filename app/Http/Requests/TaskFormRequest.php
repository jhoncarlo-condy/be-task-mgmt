<?php

namespace App\Http\Requests;

use App\Enum\Priority;
use App\Enum\Status;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class TaskFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return request()->isMethod('POST') ? $this->rulesForCreate() : $this->rulesForUpdate();
    }

    public function rulesForCreate(): array
    {
        return [
            'title'       => ['required', 'string', 'max:50', Rule::unique('tasks','title')->where(fn (Builder $query) => $query->where('user_id', Auth::user()->id))],
            'description' => ['required', 'string', 'max: 500'],
            'status'      => ['required', Rule::enum(Status::class)],
            'priority'    => ['required', Rule::enum(Priority::class)],
        ];
    }

    public function rulesForUpdate(): array
    {
        return [
            'title'       => ['sometimes', 'string', 'max:50', Rule::unique('tasks','title')->ignore($this->task->id)->where(fn (Builder $query) => $query->where('user_id', Auth::user()->id))],
            'description' => ['sometimes', 'string', 'max: 500'],
            'status'      => ['sometimes', Rule::enum(Status::class)],
            'priority'    => ['sometimes', Rule::enum(Priority::class)],
        ];
    }
}
