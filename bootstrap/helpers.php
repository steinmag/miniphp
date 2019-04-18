<?php
if (!function_exists('view')) {
    /**
     * loads a view.
     *
     * @param  string  $name
     * @param  array  $data
     * @return string
     */
    function view($name, $data = [])
    {
        try {
            $blade = new Jenssegers\Blade\Blade(App\Core\Config::get('views_path'), App\Core\Config::get('cache_path'));
            echo $blade->make($name, $data);
        }
        catch (Exception $e) {
            throw new Exception("You have managed to disturbe the inner workings of our application. Well done!", 1);
        }
    }
}

if (! function_exists('redirect')) {
    /**
     * redirects user to a uri
     *
     * @param  string  $path
     * @return void
     */
    function redirect ($path)
    {
        // Todo: Opprett klasse som håndterer redirects.
        header("Location: /{$path}");
    }
}

if (! function_exists('env')) {
    /**
     * Gets the value of an environment variable.
     *
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    function env($key, $default = null)
    {
        $value = getenv($key);

        if ($value === false) {
            return value($default);
        }

        switch (strtolower($value)) {
            case 'true':
            case '(true)':
                return true;
            case 'false':
            case '(false)':
                return false;
            case 'empty':
            case '(empty)':
                return '';
            case 'null':
            case '(null)':
                return;
        }

        if (($valueLength = strlen($value)) > 1 && $value[0] === '"' && $value[$valueLength - 1] === '"') {
            return substr($value, 1, -1);
        }

        return $value;
    }
}
