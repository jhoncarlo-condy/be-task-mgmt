# Task Management System

A full-stack task management system built with **Laravel** (API backend) and **Vue.js** (frontend) that allows users to manage tasks by priority and status.

---

## 🧱 Tech Stack

- **Backend:** Laravel 10+
- **Frontend:** Vue.js 3 (Composition API)
- **Database:** MySQL / PostgreSQL
- **Authentication:** Laravel Sanctum / Passport

---

## ⚙️ Features

- User authentication (login/register)
- Create, Read, Update User
- Change Password
- Create, Read, Update, Delete Tasks
- Set task `priority`: `LOW`, `MEDIUM`, `HIGH`
- Track task `status`: `PENDING`, `COMPLETED`
- Aggregate task counts by status and priority
[Task Mgmt API.postman_collection.json](https://github.com/user-attachments/files/20237304/Task.Mgmt.API.postman_collection.json)

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

[Uploading Task Mgmt API.postman_collection.json…]()
{
	"info": {
		"_postman_id": "d8fb7969-3ad5-40be-8aa4-c880db686d99",
		"name": "Task Mgmt API",
		"description": "This template contains a boilerplate for documentation that you can quickly customize and reuse.\n\n### How to use this template:\n\n- Replace the content given brackets (()) with your API's details.\n- Tips are formatted in `codespan` - feel free to read and remove them.\n    \n\n---\n\n`Start with a brief overview of what your API offers.`\n\nThe ((product name)) provides many API products, tools, and resources that enable you to ((add product value here)).\n\n`You can also list the APIs you offer, link to the relevant pages, or do both in this section.`\n\n## **Getting started guide**\n\n`List the steps or points required to start using your APIs. Make sure to cover everything required to reach success with your API as quickly as possible.`\n\nTo start using the ((add APIs here)), you need to -\n\n`The points given below are from The Postman API's documentation. You can reference it to write your own getting started guide.`\n\n- You must use a valid API Key to send requests to the API endpoints. You can get your API key from Postman's [integrations dashboard](https://go.postman.co/settings/me/api-keys).\n- The API has [rate and usage limits](https://learning.postman.com/docs/developer/postman-api/postman-api-rate-limits/).\n- The API only responds to HTTPS-secured communications. Any requests sent via HTTP return an HTTP 301 redirect to the corresponding HTTPS resources.\n- The API returns request responses in JSON format. When an API request returns an error, it is sent in the JSON response as an error key.\n    \n\n## Authentication\n\n`Add details on the authorization keys/tokens required, steps that cover how to get them, and the relevant error codes.`\n\nThe ((product name)) API uses ((add your API's authorization type)) for authentication.\n\n`The details given below are from the Postman API's documentation. You can reference it to write your own authentication section.`\n\nPostman uses API keys for authentication. You can generate a Postman API key in the [API keys](https://postman.postman.co/settings/me/api-keys) section of your Postman account settings.\n\nYou must include an API key in each request to the Postman API with the X-Api-Key request header.\n\n### Authentication error response\n\nIf an API key is missing, malformed, or invalid, you will receive an HTTP 401 Unauthorized response code.\n\n## Rate and usage limits\n\n`Use this section to cover your APIs' terms of use. Include API limits, constraints, and relevant error codes, so consumers understand the permitted API usage and practices.`\n\n`The example given below is from The Postman API's documentation. Use it as a reference to write your APIs' terms of use.`\n\nAPI access rate limits apply at a per-API key basis in unit time. The limit is 300 requests per minute. Also, depending on your plan, you may have usage limits. If you exceed either limit, your request will return an HTTP 429 Too Many Requests status code.\n\nEach API response returns the following set of headers to help you identify your use status:\n\n| Header | Description |\n| --- | --- |\n| `X-RateLimit-Limit` | The maximum number of requests that the consumer is permitted to make per minute. |\n| `X-RateLimit-Remaining` | The number of requests remaining in the current rate limit window. |\n| `X-RateLimit-Reset` | The time at which the current rate limit window resets in UTC epoch seconds. |\n\n### 503 response\n\nAn HTTP `503` response from our servers indicates there is an unexpected spike in API access traffic. The server is usually operational within the next five minutes. If the outage persists or you receive any other form of an HTTP `5XX` error, [contact support](https://support.postman.com/hc/en-us/requests/new/).\n\n### **Need some help?**\n\n`Add links that customers can refer to whenever they need help.`\n\nIn case you have questions, go through our tutorials ((link to your video or help documentation here)). Or visit our FAQ page ((link to the relevant page)).\n\nOr you can check out our community forum, there’s a good chance our community has an answer for you. Visit our developer forum ((link to developer forum)) to review topics, ask questions, and learn from others.\n\n`You can also document or add links to libraries, code examples, and other resources needed to make a request.`",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
		"_exporter_id": "16116784",
		"_collection_link": "https://task-mgmt.postman.co/workspace/task-mgmt~a73a2de9-a59b-4fbc-944f-61f57bb937ca/collection/16116784-d8fb7969-3ad5-40be-8aa4-c880db686d99?action=share&source=collection_link&creator=16116784"
	},
	"item": [
		{
			"name": "User",
			"item": [
				{
					"name": "Profile",
					"item": [
						{
							"name": "user detail",
							"request": {
								"method": "GET",
								"header": [],
								"url": {
									"raw": "{{baseUrl}}/api/user/profile",
									"host": [
										"{{baseUrl}}"
									],
									"path": [
										"api",
										"user",
										"profile"
									]
								}
							},
							"response": [
								{
									"name": "user detail",
									"originalRequest": {
										"method": "GET",
										"header": [],
										"url": {
											"raw": "{{baseUrl}}/api/user/profile",
											"host": [
												"{{baseUrl}}"
											],
											"path": [
												"api",
												"user",
												"profile"
											]
										}
									},
									"status": "OK",
									"code": 200,
									"_postman_previewlanguage": "json",
									"header": [
										{
											"key": "Date",
											"value": "Fri, 16 May 2025 01:20:19 GMT"
										},
										{
											"key": "Server",
											"value": "Apache/2.4.59 (Win64) OpenSSL/3.1.5"
										},
										{
											"key": "X-Powered-By",
											"value": "PHP/8.2.18"
										},
										{
											"key": "Cache-Control",
											"value": "no-cache, private"
										},
										{
											"key": "Access-Control-Allow-Origin",
											"value": "*"
										},
										{
											"key": "Vary",
											"value": "Authorization,Accept-Encoding"
										},
										{
											"key": "Content-Encoding",
											"value": "gzip"
										},
										{
											"key": "Content-Length",
											"value": "168"
										},
										{
											"key": "Keep-Alive",
											"value": "timeout=5, max=100"
										},
										{
											"key": "Connection",
											"value": "Keep-Alive"
										},
										{
											"key": "Content-Type",
											"value": "application/json"
										}
									],
									"cookie": [],
									"body": "{\n    \"success\": true,\n    \"data\": {\n        \"id\": 8,\n        \"first_name\": \"Simon\",\n        \"last_name\": \"Doe\",\n        \"email\": \"simondoe@gmail.com\",\n        \"email_verified_at\": null,\n        \"user_type\": 2,\n        \"created_at\": \"2025-05-15T23:30:50.000000Z\",\n        \"updated_at\": \"2025-05-15T23:31:05.000000Z\"\n    }\n}"
								}
							]
						},
						{
							"name": "update user",
							"request": {
								"method": "PUT",
								"header": [],
								"body": {
									"mode": "raw",
									"raw": "{\r\n    \"first_name\": \"simon edited\"\r\n}",
									"options": {
										"raw": {
											"language": "json"
										}
									}
								},
								"url": {
									"raw": "{{baseUrl}}/api/user/simondoe@gmail.com",
									"host": [
										"{{baseUrl}}"
									],
									"path": [
										"api",
										"user",
										"simondoe@gmail.com"
									]
								}
							},
							"response": [
								{
									"name": "update user",
									"originalRequest": {
										"method": "PUT",
										"header": [],
										"body": {
											"mode": "raw",
											"raw": "{\r\n    \"first_name\": \"simon edited\"\r\n}",
											"options": {
												"raw": {
													"language": "json"
												}
											}
										},
										"url": {
											"raw": "{{baseUrl}}/api/user/simondoe@gmail.com",
											"host": [
												"{{baseUrl}}"
											],
											"path": [
												"api",
												"user",
												"simondoe@gmail.com"
											]
										}
									},
									"status": "OK",
									"code": 200,
									"_postman_previewlanguage": "json",
									"header": [
										{
											"key": "Date",
											"value": "Fri, 16 May 2025 01:20:49 GMT"
										},
										{
											"key": "Server",
											"value": "Apache/2.4.59 (Win64) OpenSSL/3.1.5"
										},
										{
											"key": "X-Powered-By",
											"value": "PHP/8.2.18"
										},
										{
											"key": "Cache-Control",
											"value": "no-cache, private"
										},
										{
											"key": "Access-Control-Allow-Origin",
											"value": "*"
										},
										{
											"key": "Vary",
											"value": "Authorization,Accept-Encoding"
										},
										{
											"key": "Content-Encoding",
											"value": "gzip"
										},
										{
											"key": "Content-Length",
											"value": "67"
										},
										{
											"key": "Keep-Alive",
											"value": "timeout=5, max=100"
										},
										{
											"key": "Connection",
											"value": "Keep-Alive"
										},
										{
											"key": "Content-Type",
											"value": "application/json"
										}
									],
									"cookie": [],
									"body": "{\n    \"success\": true,\n    \"message\": \"User updated successfully\"\n}"
								}
							]
						},
						{
							"name": "change password",
							"request": {
								"method": "POST",
								"header": [],
								"body": {
									"mode": "raw",
									"raw": "{\r\n    \"old_password\": \"simondoe@gmail.com1\",\r\n    \"new_password\": \"simondoe@gmail.com\",\r\n    \"new_password_confirmation\": \"simondoe@gmail.com\"\r\n}",
									"options": {
										"raw": {
											"language": "json"
										}
									}
								},
								"url": {
									"raw": "{{baseUrl}}/api/user/change-password",
									"host": [
										"{{baseUrl}}"
									],
									"path": [
										"api",
										"user",
										"change-password"
									]
								}
							},
							"response": [
								{
									"name": "change password",
									"originalRequest": {
										"method": "POST",
										"header": [],
										"body": {
											"mode": "raw",
											"raw": "{\r\n    \"old_password\": \"simondoe@gmail.com1\",\r\n    \"new_password\": \"simondoe@gmail.com\",\r\n    \"new_password_confirmation\": \"simondoe@gmail.com\"\r\n}",
											"options": {
												"raw": {
													"language": "json"
												}
											}
										},
										"url": {
											"raw": "{{baseUrl}}/api/user/change-password",
											"host": [
												"{{baseUrl}}"
											],
											"path": [
												"api",
												"user",
												"change-password"
											]
										}
									},
									"status": "OK",
									"code": 200,
									"_postman_previewlanguage": "json",
									"header": [
										{
											"key": "Date",
											"value": "Fri, 16 May 2025 01:21:59 GMT"
										},
										{
											"key": "Server",
											"value": "Apache/2.4.59 (Win64) OpenSSL/3.1.5"
										},
										{
											"key": "X-Powered-By",
											"value": "PHP/8.2.18"
										},
										{
											"key": "Cache-Control",
											"value": "no-cache, private"
										},
										{
											"key": "Access-Control-Allow-Origin",
											"value": "*"
										},
										{
											"key": "Vary",
											"value": "Authorization,Accept-Encoding"
										},
										{
											"key": "Content-Encoding",
											"value": "gzip"
										},
										{
											"key": "Content-Length",
											"value": "71"
										},
										{
											"key": "Keep-Alive",
											"value": "timeout=5, max=100"
										},
										{
											"key": "Connection",
											"value": "Keep-Alive"
										},
										{
											"key": "Content-Type",
											"value": "application/json"
										}
									],
									"cookie": [],
									"body": "{\n    \"success\": true,\n    \"message\": \"Password changed successfully\"\n}"
								}
							]
						},
						{
							"name": "Dashboard Statistics",
							"request": {
								"method": "GET",
								"header": [],
								"url": {
									"raw": "{{baseUrl}}/api/user/statistics",
									"host": [
										"{{baseUrl}}"
									],
									"path": [
										"api",
										"user",
										"statistics"
									]
								}
							},
							"response": [
								{
									"name": "Dashboard Statistics",
									"originalRequest": {
										"method": "GET",
										"header": [],
										"url": {
											"raw": "{{baseUrl}}/api/user/statistics",
											"host": [
												"{{baseUrl}}"
											],
											"path": [
												"api",
												"user",
												"statistics"
											]
										}
									},
									"status": "OK",
									"code": 200,
									"_postman_previewlanguage": "json",
									"header": [
										{
											"key": "Date",
											"value": "Fri, 16 May 2025 02:05:25 GMT"
										},
										{
											"key": "Server",
											"value": "Apache/2.4.59 (Win64) OpenSSL/3.1.5"
										},
										{
											"key": "X-Powered-By",
											"value": "PHP/8.2.18"
										},
										{
											"key": "Cache-Control",
											"value": "no-cache, private"
										},
										{
											"key": "Access-Control-Allow-Origin",
											"value": "*"
										},
										{
											"key": "Vary",
											"value": "Authorization,Accept-Encoding"
										},
										{
											"key": "Content-Encoding",
											"value": "gzip"
										},
										{
											"key": "Content-Length",
											"value": "111"
										},
										{
											"key": "Keep-Alive",
											"value": "timeout=5, max=99"
										},
										{
											"key": "Connection",
											"value": "Keep-Alive"
										},
										{
											"key": "Content-Type",
											"value": "application/json"
										}
									],
									"cookie": [],
									"body": "{\n    \"success\": true,\n    \"data\": {\n        \"low_prio_task_count\": 14,\n        \"mid_prio_task_count\": 4,\n        \"high_prio_task_count\": 1,\n        \"pending_tasks\": 19,\n        \"completed_tasks\": 0\n    }\n}"
								}
							]
						}
					],
					"auth": {
						"type": "bearer",
						"bearer": [
							{
								"key": "token",
								"value": "{{userToken}}",
								"type": "string"
							}
						]
					},
					"event": [
						{
							"listen": "prerequest",
							"script": {
								"type": "text/javascript",
								"packages": {},
								"exec": [
									""
								]
							}
						},
						{
							"listen": "test",
							"script": {
								"type": "text/javascript",
								"packages": {},
								"exec": [
									""
								]
							}
						}
					]
				},
				{
					"name": "Task",
					"item": [
						{
							"name": "Task List",
							"request": {
								"method": "GET",
								"header": [],
								"url": {
									"raw": "{{baseUrl}}/api/tasks",
									"host": [
										"{{baseUrl}}"
									],
									"path": [
										"api",
										"tasks"
									]
								}
							},
							"response": [
								{
									"name": "Task List",
									"originalRequest": {
										"method": "GET",
										"header": [],
										"url": {
											"raw": "{{baseUrl}}/api/tasks?page=1",
											"host": [
												"{{baseUrl}}"
											],
											"path": [
												"api",
												"tasks"
											],
											"query": [
												{
													"key": "page",
													"value": "1"
												}
											]
										}
									},
									"status": "OK",
									"code": 200,
									"_postman_previewlanguage": "json",
									"header": [
										{
											"key": "Date",
											"value": "Fri, 16 May 2025 01:24:17 GMT"
										},
										{
											"key": "Server",
											"value": "Apache/2.4.59 (Win64) OpenSSL/3.1.5"
										},
										{
											"key": "X-Powered-By",
											"value": "PHP/8.2.18"
										},
										{
											"key": "Cache-Control",
											"value": "no-cache, private"
										},
										{
											"key": "Access-Control-Allow-Origin",
											"value": "*"
										},
										{
											"key": "Vary",
											"value": "Authorization,Accept-Encoding"
										},
										{
											"key": "Content-Encoding",
											"value": "gzip"
										},
										{
											"key": "Content-Length",
											"value": "321"
										},
										{
											"key": "Keep-Alive",
											"value": "timeout=5, max=100"
										},
										{
											"key": "Connection",
											"value": "Keep-Alive"
										},
										{
											"key": "Content-Type",
											"value": "application/json"
										}
									],
									"cookie": [],
									"body": "{\n    \"headers\": {},\n    \"original\": {\n        \"current_page\": 1,\n        \"data\": [\n            {\n                \"id\": 5,\n                \"title\": \"task3\",\n                \"description\": \"deszcz\",\n                \"status\": \"Pending\",\n                \"priority\": \"Low\",\n                \"order\": 1,\n                \"user_id\": 8\n            },\n            {\n                \"id\": 6,\n                \"title\": \"task4\",\n                \"description\": \"deszcz\",\n                \"status\": \"Pending\",\n                \"priority\": \"Low\",\n                \"order\": 2,\n                \"user_id\": 8\n            },\n            {\n                \"id\": 7,\n                \"title\": \"tas1\",\n                \"description\": \"deszcz\",\n                \"status\": \"Pending\",\n                \"priority\": \"Low\",\n                \"order\": 3,\n                \"user_id\": 8\n            },\n            {\n                \"id\": 8,\n                \"title\": \"tas2\",\n                \"description\": \"deszcz\",\n                \"status\": \"Pending\",\n                \"priority\": \"Low\",\n                \"order\": 4,\n                \"user_id\": 8\n            },\n            {\n                \"id\": 9,\n                \"title\": \"tas3\",\n                \"description\": \"deszcz\",\n                \"status\": \"Pending\",\n                \"priority\": \"Low\",\n                \"order\": 5,\n                \"user_id\": 8\n            },\n            {\n                \"id\": 10,\n                \"title\": \"tas4\",\n                \"description\": \"deszcz\",\n                \"status\": \"Pending\",\n                \"priority\": \"Low\",\n                \"order\": 6,\n                \"user_id\": 8\n            },\n            {\n                \"id\": 11,\n                \"title\": \"tas5\",\n                \"description\": \"deszcz\",\n                \"status\": \"Pending\",\n                \"priority\": \"Low\",\n                \"order\": 7,\n                \"user_id\": 8\n            },\n            {\n                \"id\": 12,\n                \"title\": \"tas6\",\n                \"description\": \"deszcz\",\n                \"status\": \"Pending\",\n                \"priority\": \"Low\",\n                \"order\": 8,\n                \"user_id\": 8\n            },\n            {\n                \"id\": 13,\n                \"title\": \"tas7\",\n                \"description\": \"deszcz\",\n                \"status\": \"Pending\",\n                \"priority\": \"Low\",\n                \"order\": 9,\n                \"user_id\": 8\n            },\n            {\n                \"id\": 14,\n                \"title\": \"tas8\",\n                \"description\": \"deszcz\",\n                \"status\": \"Pending\",\n                \"priority\": \"Low\",\n                \"order\": 10,\n                \"user_id\": 8\n            }\n        ],\n        \"first_page_url\": \"http://task-management.test/api/tasks?page=1\",\n        \"from\": 1,\n        \"next_page_url\": \"http://task-management.test/api/tasks?page=2\",\n        \"path\": \"http://task-management.test/api/tasks\",\n        \"per_page\": 10,\n        \"prev_page_url\": null,\n        \"to\": 10\n    },\n    \"exception\": null\n}"
								}
							]
						},
						{
							"name": "task detail",
							"request": {
								"method": "GET",
								"header": [],
								"url": {
									"raw": "{{baseUrl}}/api/tasks/22",
									"host": [
										"{{baseUrl}}"
									],
									"path": [
										"api",
										"tasks",
										"22"
									]
								}
							},
							"response": [
								{
									"name": "task detail",
									"originalRequest": {
										"method": "GET",
										"header": [],
										"url": {
											"raw": "{{baseUrl}}/api/tasks/22",
											"host": [
												"{{baseUrl}}"
											],
											"path": [
												"api",
												"tasks",
												"22"
											]
										}
									},
									"status": "OK",
									"code": 200,
									"_postman_previewlanguage": "json",
									"header": [
										{
											"key": "Date",
											"value": "Fri, 16 May 2025 01:25:02 GMT"
										},
										{
											"key": "Server",
											"value": "Apache/2.4.59 (Win64) OpenSSL/3.1.5"
										},
										{
											"key": "X-Powered-By",
											"value": "PHP/8.2.18"
										},
										{
											"key": "Cache-Control",
											"value": "no-cache, private"
										},
										{
											"key": "Access-Control-Allow-Origin",
											"value": "*"
										},
										{
											"key": "Vary",
											"value": "Authorization,Accept-Encoding"
										},
										{
											"key": "Content-Encoding",
											"value": "gzip"
										},
										{
											"key": "Content-Length",
											"value": "134"
										},
										{
											"key": "Keep-Alive",
											"value": "timeout=5, max=99"
										},
										{
											"key": "Connection",
											"value": "Keep-Alive"
										},
										{
											"key": "Content-Type",
											"value": "application/json"
										}
									],
									"cookie": [],
									"body": "{\n    \"success\": true,\n    \"message\": {\n        \"id\": 22,\n        \"title\": \"Simon Task\",\n        \"description\": \"deszcz\",\n        \"status\": \"Pending\",\n        \"priority\": \"Low\",\n        \"order\": 18,\n        \"user_id\": 8\n    }\n}"
								}
							]
						},
						{
							"name": "update detail",
							"request": {
								"method": "PUT",
								"header": [],
								"body": {
									"mode": "raw",
									"raw": "{\r\n    \"title\": \"Simon Updated Task\",\r\n}",
									"options": {
										"raw": {
											"language": "json"
										}
									}
								},
								"url": {
									"raw": "{{baseUrl}}/api/tasks/22",
									"host": [
										"{{baseUrl}}"
									],
									"path": [
										"api",
										"tasks",
										"22"
									]
								}
							},
							"response": [
								{
									"name": "update detail",
									"originalRequest": {
										"method": "PUT",
										"header": [],
										"body": {
											"mode": "raw",
											"raw": "{\r\n    \"title\": \"Simon Updated Task\",\r\n}",
											"options": {
												"raw": {
													"language": "json"
												}
											}
										},
										"url": {
											"raw": "{{baseUrl}}/api/tasks/22",
											"host": [
												"{{baseUrl}}"
											],
											"path": [
												"api",
												"tasks",
												"22"
											]
										}
									},
									"status": "OK",
									"code": 200,
									"_postman_previewlanguage": "json",
									"header": [
										{
											"key": "Date",
											"value": "Fri, 16 May 2025 01:25:20 GMT"
										},
										{
											"key": "Server",
											"value": "Apache/2.4.59 (Win64) OpenSSL/3.1.5"
										},
										{
											"key": "X-Powered-By",
											"value": "PHP/8.2.18"
										},
										{
											"key": "Cache-Control",
											"value": "no-cache, private"
										},
										{
											"key": "Access-Control-Allow-Origin",
											"value": "*"
										},
										{
											"key": "Vary",
											"value": "Authorization,Accept-Encoding"
										},
										{
											"key": "Content-Encoding",
											"value": "gzip"
										},
										{
											"key": "Content-Length",
											"value": "68"
										},
										{
											"key": "Keep-Alive",
											"value": "timeout=5, max=100"
										},
										{
											"key": "Connection",
											"value": "Keep-Alive"
										},
										{
											"key": "Content-Type",
											"value": "application/json"
										}
									],
									"cookie": [],
									"body": "{\n    \"success\": true,\n    \"message\": \"Task Updated Successfully\"\n}"
								}
							]
						},
						{
							"name": "delete",
							"request": {
								"method": "DELETE",
								"header": [],
								"url": {
									"raw": "{{baseUrl}}/api/tasks/21",
									"host": [
										"{{baseUrl}}"
									],
									"path": [
										"api",
										"tasks",
										"21"
									]
								}
							},
							"response": [
								{
									"name": "delete",
									"originalRequest": {
										"method": "DELETE",
										"header": [],
										"url": {
											"raw": "{{baseUrl}}/api/tasks/21",
											"host": [
												"{{baseUrl}}"
											],
											"path": [
												"api",
												"tasks",
												"21"
											]
										}
									},
									"status": "OK",
									"code": 200,
									"_postman_previewlanguage": "json",
									"header": [
										{
											"key": "Date",
											"value": "Fri, 16 May 2025 01:25:35 GMT"
										},
										{
											"key": "Server",
											"value": "Apache/2.4.59 (Win64) OpenSSL/3.1.5"
										},
										{
											"key": "X-Powered-By",
											"value": "PHP/8.2.18"
										},
										{
											"key": "Cache-Control",
											"value": "no-cache, private"
										},
										{
											"key": "Access-Control-Allow-Origin",
											"value": "*"
										},
										{
											"key": "Vary",
											"value": "Authorization,Accept-Encoding"
										},
										{
											"key": "Content-Encoding",
											"value": "gzip"
										},
										{
											"key": "Content-Length",
											"value": "68"
										},
										{
											"key": "Keep-Alive",
											"value": "timeout=5, max=99"
										},
										{
											"key": "Connection",
											"value": "Keep-Alive"
										},
										{
											"key": "Content-Type",
											"value": "application/json"
										}
									],
									"cookie": [],
									"body": "{\n    \"success\": false,\n    \"message\": \"Task Deletion Failed\"\n}"
								}
							]
						},
						{
							"name": "Create Task",
							"request": {
								"method": "POST",
								"header": [],
								"body": {
									"mode": "raw",
									"raw": "{\r\n    \"title\": \"Simon Task Example\",\r\n    \"description\": \"Sample Description\",\r\n    \"priority\": \"low\"\r\n}",
									"options": {
										"raw": {
											"language": "json"
										}
									}
								},
								"url": {
									"raw": "{{baseUrl}}/api/tasks",
									"host": [
										"{{baseUrl}}"
									],
									"path": [
										"api",
										"tasks"
									]
								}
							},
							"response": [
								{
									"name": "Create Task",
									"originalRequest": {
										"method": "POST",
										"header": [],
										"body": {
											"mode": "raw",
											"raw": "{\r\n    \"title\": \"Simon Task Example\",\r\n    \"description\": \"Sample Description\",\r\n    \"priority\": \"low\"\r\n}",
											"options": {
												"raw": {
													"language": "json"
												}
											}
										},
										"url": {
											"raw": "{{baseUrl}}/api/tasks",
											"host": [
												"{{baseUrl}}"
											],
											"path": [
												"api",
												"tasks"
											]
										}
									},
									"status": "OK",
									"code": 200,
									"_postman_previewlanguage": "json",
									"header": [
										{
											"key": "Date",
											"value": "Fri, 16 May 2025 01:24:10 GMT"
										},
										{
											"key": "Server",
											"value": "Apache/2.4.59 (Win64) OpenSSL/3.1.5"
										},
										{
											"key": "X-Powered-By",
											"value": "PHP/8.2.18"
										},
										{
											"key": "Cache-Control",
											"value": "no-cache, private"
										},
										{
											"key": "Access-Control-Allow-Origin",
											"value": "*"
										},
										{
											"key": "Vary",
											"value": "Authorization,Accept-Encoding"
										},
										{
											"key": "Content-Encoding",
											"value": "gzip"
										},
										{
											"key": "Content-Length",
											"value": "68"
										},
										{
											"key": "Keep-Alive",
											"value": "timeout=5, max=100"
										},
										{
											"key": "Connection",
											"value": "Keep-Alive"
										},
										{
											"key": "Content-Type",
											"value": "application/json"
										}
									],
									"cookie": [],
									"body": "{\n    \"success\": true,\n    \"message\": \"Task Created Successfully\"\n}"
								}
							]
						}
					],
					"auth": {
						"type": "bearer",
						"bearer": [
							{
								"key": "token",
								"value": "{{userToken}}",
								"type": "string"
							}
						]
					},
					"event": [
						{
							"listen": "prerequest",
							"script": {
								"type": "text/javascript",
								"packages": {},
								"exec": [
									""
								]
							}
						},
						{
							"listen": "test",
							"script": {
								"type": "text/javascript",
								"packages": {},
								"exec": [
									""
								]
							}
						}
					]
				}
			],
			"description": "The `/me` endpoints let you manage information about the authenticated user.",
			"event": [
				{
					"listen": "prerequest",
					"script": {
						"type": "text/javascript",
						"packages": {},
						"exec": [
							"pm.request.headers.add({key: 'Accept', value: 'application/json' })"
						]
					}
				},
				{
					"listen": "test",
					"script": {
						"type": "text/javascript",
						"packages": {},
						"exec": [
							""
						]
					}
				}
			]
		},
		{
			"name": "Admin",
			"item": [
				{
					"name": "Users",
					"item": [
						{
							"name": "User List",
							"request": {
								"method": "GET",
								"header": [],
								"url": {
									"raw": "{{baseUrl}}/api/user/all",
									"host": [
										"{{baseUrl}}"
									],
									"path": [
										"api",
										"user",
										"all"
									]
								}
							},
							"response": []
						}
					]
				}
			],
			"auth": {
				"type": "bearer",
				"bearer": [
					{
						"key": "token",
						"value": "{{adminToken}}",
						"type": "string"
					}
				]
			},
			"event": [
				{
					"listen": "prerequest",
					"script": {
						"type": "text/javascript",
						"packages": {},
						"exec": [
							""
						]
					}
				},
				{
					"listen": "test",
					"script": {
						"type": "text/javascript",
						"packages": {},
						"exec": [
							""
						]
					}
				}
			]
		},
		{
			"name": "Guest",
			"item": [
				{
					"name": "Login/Register/Logout",
					"item": [
						{
							"name": "Login",
							"event": [
								{
									"listen": "test",
									"script": {
										"exec": [
											""
										],
										"type": "text/javascript",
										"packages": {}
									}
								},
								{
									"listen": "prerequest",
									"script": {
										"exec": [
											"pm.request.headers.add({key: 'Accept', value: 'application/json' })"
										],
										"type": "text/javascript",
										"packages": {}
									}
								}
							],
							"request": {
								"method": "POST",
								"header": [],
								"body": {
									"mode": "raw",
									"raw": "{\r\n    \"email\": \"johnnydouglas@gmail.com\",\r\n    \"password\": \"johnnydouglas123\"\r\n}",
									"options": {
										"raw": {
											"language": "json"
										}
									}
								},
								"url": {
									"raw": "{{baseUrl}}/api/login",
									"host": [
										"{{baseUrl}}"
									],
									"path": [
										"api",
										"login"
									],
									"query": [
										{
											"key": "foo",
											"value": "bar",
											"disabled": true
										}
									]
								},
								"description": "Gets information about the authenticated user."
							},
							"response": [
								{
									"name": "login response",
									"originalRequest": {
										"method": "POST",
										"header": [],
										"body": {
											"mode": "raw",
											"raw": "{\r\n    \"email\": \"task@admin.com\",\r\n    \"password\": \"t@$k@dm1n\"\r\n}",
											"options": {
												"raw": {
													"language": "json"
												}
											}
										},
										"url": {
											"raw": "{{baseUrl}}/api/login",
											"host": [
												"{{baseUrl}}"
											],
											"path": [
												"api",
												"login"
											],
											"query": [
												{
													"key": "foo",
													"value": "bar",
													"disabled": true
												}
											]
										}
									},
									"status": "OK",
									"code": 200,
									"_postman_previewlanguage": "json",
									"header": [
										{
											"key": "Date",
											"value": "Thu, 15 May 2025 04:40:22 GMT"
										},
										{
											"key": "Server",
											"value": "Apache/2.4.59 (Win64) OpenSSL/3.1.5"
										},
										{
											"key": "X-Powered-By",
											"value": "PHP/8.2.18"
										},
										{
											"key": "Cache-Control",
											"value": "no-cache, private"
										},
										{
											"key": "Access-Control-Allow-Origin",
											"value": "*"
										},
										{
											"key": "Vary",
											"value": "Accept-Encoding"
										},
										{
											"key": "Content-Encoding",
											"value": "gzip"
										},
										{
											"key": "Content-Length",
											"value": "148"
										},
										{
											"key": "Keep-Alive",
											"value": "timeout=5, max=100"
										},
										{
											"key": "Connection",
											"value": "Keep-Alive"
										},
										{
											"key": "Content-Type",
											"value": "application/json"
										}
									],
									"cookie": [],
									"body": "{\n    \"success\": true,\n    \"message\": \"Login Successful\",\n    \"user_type\": \"1\",\n    \"access_token\": \"3|Cyyd82WLifIUteakJC5jLL3oW5Un9JSedxYjJRK824343f2a\",\n    \"token_type\": \"Bearer\"\n}"
								}
							]
						},
						{
							"name": "Register",
							"event": [
								{
									"listen": "prerequest",
									"script": {
										"exec": [
											"pm.request.headers.add({key: 'Accept', value: 'application/json' })"
										],
										"type": "text/javascript",
										"packages": {}
									}
								},
								{
									"listen": "test",
									"script": {
										"exec": [
											""
										],
										"type": "text/javascript",
										"packages": {}
									}
								}
							],
							"request": {
								"method": "POST",
								"header": [],
								"body": {
									"mode": "raw",
									"raw": "{\r\n    \"first_name\": \"Johnny\",\r\n    \"last_name\": \"Douglas\",\r\n    \"email\": \"johnnydouglas@gmail.com\",\r\n    \"password\": \"johnnydouglas123\",\r\n    \"password_confirmation\": \"johnnydouglas123\"\r\n}",
									"options": {
										"raw": {
											"language": "json"
										}
									}
								},
								"url": {
									"raw": "{{baseUrl}}/api/register",
									"host": [
										"{{baseUrl}}"
									],
									"path": [
										"api",
										"register"
									],
									"query": [
										{
											"key": "foo",
											"value": "bar",
											"disabled": true
										}
									]
								}
							},
							"response": [
								{
									"name": "register response",
									"originalRequest": {
										"method": "POST",
										"header": [],
										"body": {
											"mode": "raw",
											"raw": "{\r\n    \"first_name\": \"Johnny\",\r\n    \"last_name\": \"Douglas\",\r\n    \"email\": \"johnnydouglas@gmail.com\",\r\n    \"password\": \"johnnydouglas123\",\r\n    \"password_confirmation\": \"johnnydouglas123\"\r\n}",
											"options": {
												"raw": {
													"language": "json"
												}
											}
										},
										"url": {
											"raw": "{{baseUrl}}/api/register",
											"host": [
												"{{baseUrl}}"
											],
											"path": [
												"api",
												"register"
											],
											"query": [
												{
													"key": "foo",
													"value": "bar",
													"disabled": true
												}
											]
										}
									},
									"status": "Created",
									"code": 201,
									"_postman_previewlanguage": "json",
									"header": [
										{
											"key": "Date",
											"value": "Thu, 15 May 2025 23:26:20 GMT"
										},
										{
											"key": "Server",
											"value": "Apache/2.4.59 (Win64) OpenSSL/3.1.5"
										},
										{
											"key": "X-Powered-By",
											"value": "PHP/8.2.18"
										},
										{
											"key": "Cache-Control",
											"value": "no-cache, private"
										},
										{
											"key": "Access-Control-Allow-Origin",
											"value": "*"
										},
										{
											"key": "Vary",
											"value": "Accept-Encoding"
										},
										{
											"key": "Content-Encoding",
											"value": "gzip"
										},
										{
											"key": "Content-Length",
											"value": "67"
										},
										{
											"key": "Keep-Alive",
											"value": "timeout=5, max=100"
										},
										{
											"key": "Connection",
											"value": "Keep-Alive"
										},
										{
											"key": "Content-Type",
											"value": "application/json"
										}
									],
									"cookie": [],
									"body": "{\n    \"success\": true,\n    \"message\": \"User created successfully\"\n}"
								}
							]
						},
						{
							"name": "Logout",
							"event": [
								{
									"listen": "prerequest",
									"script": {
										"exec": [
											"pm.request.headers.add({key: 'Accept', value: 'application/json' })"
										],
										"type": "text/javascript",
										"packages": {}
									}
								}
							],
							"request": {
								"auth": {
									"type": "bearer",
									"bearer": [
										{
											"key": "token",
											"value": "3|Cyyd82WLifIUteakJC5jLL3oW5Un9JSedxYjJRK824343f2a",
											"type": "string"
										}
									]
								},
								"method": "POST",
								"header": [],
								"url": {
									"raw": "{{baseUrl}}/api/logout",
									"host": [
										"{{baseUrl}}"
									],
									"path": [
										"api",
										"logout"
									],
									"query": [
										{
											"key": "foo",
											"value": "bar",
											"disabled": true
										}
									]
								}
							},
							"response": [
								{
									"name": "Logout",
									"originalRequest": {
										"method": "POST",
										"header": [],
										"url": {
											"raw": "{{baseUrl}}/api/logout",
											"host": [
												"{{baseUrl}}"
											],
											"path": [
												"api",
												"logout"
											],
											"query": [
												{
													"key": "foo",
													"value": "bar",
													"disabled": true
												}
											]
										}
									},
									"status": "OK",
									"code": 200,
									"_postman_previewlanguage": "json",
									"header": [
										{
											"key": "Date",
											"value": "Fri, 16 May 2025 01:19:43 GMT"
										},
										{
											"key": "Server",
											"value": "Apache/2.4.59 (Win64) OpenSSL/3.1.5"
										},
										{
											"key": "X-Powered-By",
											"value": "PHP/8.2.18"
										},
										{
											"key": "Cache-Control",
											"value": "no-cache, private"
										},
										{
											"key": "Access-Control-Allow-Origin",
											"value": "*"
										},
										{
											"key": "Vary",
											"value": "Authorization,Accept-Encoding"
										},
										{
											"key": "Content-Encoding",
											"value": "gzip"
										},
										{
											"key": "Content-Length",
											"value": "66"
										},
										{
											"key": "Keep-Alive",
											"value": "timeout=5, max=100"
										},
										{
											"key": "Connection",
											"value": "Keep-Alive"
										},
										{
											"key": "Content-Type",
											"value": "application/json"
										}
									],
									"cookie": [],
									"body": "{\n    \"success\": true,\n    \"message\": \"Successfully logged out\"\n}"
								}
							]
						}
					]
				}
			]
		}
	],
	"auth": {
		"type": "apikey",
		"apikey": [
			{
				"key": "key",
				"value": "X-API-Key",
				"type": "string"
			},
			{
				"key": "value",
				"value": "{{token}}",
				"type": "string"
			}
		]
	},
	"event": [
		{
			"listen": "prerequest",
			"script": {
				"type": "text/javascript",
				"exec": [
					""
				]
			}
		},
		{
			"listen": "test",
			"script": {
				"type": "text/javascript",
				"exec": [
					""
				]
			}
		}
	],
	"variable": [
		{
			"key": "baseUrl",
			"value": "http://task-management.test"
		},
		{
			"key": "adminToken",
			"value": "10|QpNIlLjlSFs060c93YKQRJywzwtZbf7KqXrBBfe71082ea43",
			"type": "string"
		},
		{
			"key": "userToken",
			"value": "21|re8XyDshMyizSIa2ZHufHuUsR3oe2jQRd2J3UXr3cfc02ee4",
			"type": "string"
		}
	]
}
---

## 🖥️ Frontend (Vue.js)

- **Vue Router** for navigation
- **Pinia** or **Vuex** for state management
- Axios to interact with Laravel API
- Composition API and reusable components
