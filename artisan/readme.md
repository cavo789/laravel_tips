# Laravel - Artisan

## DOS batch - Clear

Simple batch file to quickly flush the cache (`cache:clear`), the configuration (`config:clear`), the session (`session:clear` (see [Clear sessions](clear-sessions))) and the compiled view files (`view:clear`).

### Installation

Copy [clear.bat](clear.bat) in your root folder (f.i. into c:/sites/my_site)

### Use

From your prompt, go to your root folder and run `clear.bat`.

## Clear sessions

Custom artisan command for clearing all sessions (both in database and on the filesystem).

### Installation

Copy [ClearSessions.php](ClearSessions.php) under your `app/console/commands`.

### Use

From your prompt, run `php artisan session:clear`.
