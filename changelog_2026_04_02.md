# Changelog – 2026.04.02.
---

## Database Migrations

### Plans Table
- Added `difficulty`, `version`, `sets` (optional), `duration` (optional).

### Exercises Table
- reworked logic
- Replaced level-specific repetitions with unified `quantity` and `quantity_type`.
- Added `img` column for media.

---

## Eloquent Models

### Category
- Removed `user_id` and `user()` relation.
- Fillable: `['name']`.

### Plan
- Fillable: `['category_id', 'version', 'sets', 'duration']`.

### Exercise
- Fillable: `['plan_id', 'exercise_name', 'quantity', 'quantity_type', 'img']`.
- Added functions to minimize human error when inserting new exercises

### DoneWorkout
- Fillable: `['plan_id', 'user_id', 'completed_at']`.

---

## Controllers

### CategoryController
- `index()`: returns all categories + `categoryMeta`.

### PlanController
- `select()`: handles category & difficulty selection.
- Filters guest vs auth users, dynamic selection for better flow

### ExerciseController
- `show()`: loads exercises for a plan, restricts access by user type
- `complete()`: marks a plan as completed for logged-in users, prevents duplicates, returns JSON for DoneWorkouts POST

---

## Routes

- Updated `/workouts` routes to support:
  - Category listing (`CategoryController@index`)
  - Plan selection (`PlanController@select`) with optional difficulty/version
  - Plan exercises (`ExerciseController@show`)
  - POST Saving completed workouts (`ExerciseController@complete`, auth-only)

---

## Blade Views

### New / Updated Views
- `workouts.blade.php` updated:
  - Is now filled by CategoryController instead of a static array.
  - Fully responsive grid layout.
- `plan-selection.blade.php` created:
  - Handles difficulty and version selection.
  - Responsive buttons and layout.
- `plan-exercises.blade.php` created:
  - Lists exercises with media (images/videos).
  - Includes start, next, rest, and finish screens.
  - Integrates JS player logic.
- `navbar.blade.php` and `app.blade.php` updated for full responsiveness.

---

## Frontend JS

### `exercisePlayer.ts`
- Implements step-by-step exercise playback:
  - Supports image/video display per exercise.
  - Handles sets, rest timer, and finish screen.
  - Posts completed workouts via AJAX to backend.

---

## Seeder Changes

### DatabaseSeeder
- Calls seeders individually for modularity
- MOved user/role creation to UserSeeder/RoleSeeder

### CategorySeeder
- Seeds default categories.
- Uses `updateOrCreate` to prevent duplicates.

### PlanSeeder
- Seeds plans per category, difficulty, and version.
- Supports optional `sets` and `duration`.
- Uses `updateOrCreate`.

### ExerciseSeeder
- Seeds exercises per plan/version.
- Supports both guest and authenticated plans.
- Assigns media via helper.
- built in debug options and feedback

---

## Notes & Improvements

- Fully responsive design for pages:
	- workouts
	- plan selection
	- exercise player
	- navbar