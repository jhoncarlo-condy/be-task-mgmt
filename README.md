# Task Management System

A full-stack task management system built with **Laravel** (API backend) and **Vue.js** (frontend) that allows users to manage tasks by priority and status.

---

## 🧱 Tech Stack

- **Backend:** Laravel 11
- **Frontend:** Vue.js 3 (Composition API)
- **Database:** MySQL 
- **Authentication:** Laravel Sanctum

---

## ⚙️ Features

- User authentication (login/register)
- Create, Read, Update User
- Change Password
- Create, Read, Update, Delete Tasks
- Set task `priority`: `LOW`, `MEDIUM`, `HIGH`
- Track task `status`: `PENDING`, `COMPLETED`
- Aggregate task counts by status and priority

---

## 🔐 API Endpoints (Laravel)

| Method | Endpoint              | Description                  |
|--------|-----------------------|------------------------------|
| GET    | `/api/tasks`          | List all tasks               |
| POST   | `/api/tasks`          | Create new task              |
| PUT    | `/api/tasks/{id}`     | Update task                  |
| DELETE | `/api/tasks/{id}`     | Delete task                  |
| GET    | `/api/stats`          | Task counts by status/priority |

---

## 🔐 API Collection (Laravel)


---

## 🖥️ Frontend (Vue.js)

- **Vue Router** for navigation
- **Pinia** or **Vuex** for state management
- Axios to interact with Laravel API
- Composition API and reusable components
