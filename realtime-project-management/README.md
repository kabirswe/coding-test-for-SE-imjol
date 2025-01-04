## Features

- User roles (e.g., client, manager, developer, designer) with customizable permissions.
- Management of client companies.
- Manage client users that have access to company tasks.
- Project management with user access control.
- Task groups within projects (e.g., Todo, In progress, QA, Done, Deployed).
- Task can have a assignee, due date, custom labels, time estimation (add manually or use timer), attachments, subscribers, and comments.
- Task filters for efficient organization.
- Real-time notifications and task updates via web sockets.
- Mention functionality in task descriptions and comments.
- Personalized "My Tasks" page for each user.
- Activity page for projects or selected ones.
- Invoice generation from billable tasks with logged time.
- Print or download invoices directly from the platform.
- Dashboard offering project progress, overdue tasks, recently assigned tasks, and recent comments.
- Additional reports for daily logged time per user and total logged time.
- Dark mode support for user preference.


## Tech stack

[Laravel](https://laravel.com) for backend, [React](https://react.dev) for frontend and [Inertia](https://inertiajs.com) for "glueing" them together. For the frontend React UI components, the awesome [Mantine](https://mantine.dev) library was used.

## Setup

### Project
1. Cd into the project
2. Install npm dependencies with `npm install`
3. Copy the `.env` file with `cp .env.example .env`
4. Generate an app encryption key with `php artisan key:generate`
5. Create an empty database for the application
6. In the `.env` file, add database credentials to allow Laravel to connect to the database (variables prefixed with `DB_`)
7. Migrate the database with `php artisan migrate --seed`

#### Development

9. You will be asked if you want to seed development data, for testing or development enter `yes`.
10. Install composer dependencies with `composer install`
11. Run `npm run dev`


### Admin user

New admin user will be created after running migrations with seed.

email: `admin@mail.com`

password: `password`

### Web sockets

You may use [Pusher](https://pusher.com) for web sockets, since number of free messages should be enough for the use case. Or you can use [open source alternatives](https://laravel.com/docs/10.x/broadcasting#open-source-alternatives).

To use Pusher, sign up, then create a project and copy paste app keys to `.env` (variables with `PUSHER_` prefix).


## Roadmap

- [x] Kanban view.
- [x] Report that will calculate expense and profit per user.
- [ ] Add project notes section.
- [ ] Multiple users should be able to log time on a task
- [ ] Add history of changes to the task.
- [ ] Change specific permission per user.
- [ ] Make it responsive.
- [ ] Add emojis to rich text editor.
- [ ] Write tests.
- [ ] Optimize frontend and backend.
- [ ] Consider moving to TypeScript.
