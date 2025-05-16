# Task Management System

A full-stack task management system built with **Laravel** (API backend) and **Vue.js** (frontend) that allows users to manage tasks by priority and status.

---

## 🧱 Tech Stack

-   **Backend:** Laravel 11
-   **Frontend:** Vue.js 3 (Composition API)
-   **Database:** MySQL
-   **Authentication:** Laravel Sanctum

---

## ⚙️ Features

-   User authentication (login/register)
-   Create, Read, Update User
-   Change Password
-   Create, Read, Update, Delete Tasks
-   Set task `priority`: `LOW`, `MEDIUM`, `HIGH`
-   Track task `status`: `PENDING`, `COMPLETED`
-   Aggregate task counts by status and priority

---

## 🔐 API Endpoints (Laravel)

| Method | Endpoint               | Description                    |
| ------ | ---------------------- | ------------------------------ |
| POST   | `/api/register`        | Register                       |
| POST   | `/api/login`           | login                          |
| POST   | `/api/logout`          | logout                         |
| POST   | `/api/change-password` | change password                |
| GET    | `/api/user/profile`    | view user profile              |
| PUT    | `/api/user/{email}`    | update user profile            |
| PUT    | `/api/user/statistics` | get user task statistics       |
| GET    | `/api/tasks`           | List all tasks                 |
| GET    | `/api/tasks/{id}`      | view task detail               |
| POST   | `/api/tasks`           | Create new task                |
| PUT    | `/api/tasks/{id}`      | Update task                    |
| DELETE | `/api/tasks/{id}`      | Delete task                    |

---

## 🔐 API Collection (Laravel)

[Task Mgmt API.postman_collection.json](https://github.com/user-attachments/files/20237304/Task.Mgmt.API.postman_collection.json)

or access collection directly

## https://task-mgmt.postman.co/workspace/task-mgmt~a73a2de9-a59b-4fbc-944f-61f57bb937ca/collection/16116784-d8fb7969-3ad5-40be-8aa4-c880db686d99?action=share&creator=16116784&active-environment=16116784-593d5318-e0a5-4c40-87b4-eb65997d0290

## 🖥️ Frontend (Vue.js)

-   **Vue Router** for navigation
-   **Pinia** for state management
-   Axios to interact with Laravel API
-   Composition API
-   shadcn/vue for reusable components
-   tanstack/query for asynchronus state and data handling
