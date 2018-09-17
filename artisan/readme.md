# Laravel - Artisan

## DOS batch - Clear

Simple batch file to quickly flush the cache (`cache:clear`), the configuration (`config:clear`), the session (`session:clear` (see [Clear sessions](clear-sessions))) and the compiled view files (`view:clear`).

[clear.bat](clear.bat)

## Clear sessions

Custom artisan command for clearing all sessions (both in database and on the filesystem).
[ClearSessions.php](ClearSessions.php)
