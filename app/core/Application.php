<?php

namespace App\Core;

class Application
{
    /**
     * The framework version.
     *
     * @var string
     */
    const VERSION = '0.1';

    /**
     * The base path for the Laravel installation.
     *
     * @var string
     */
    protected $basePath;

    /**
     * The environment file to load during bootstrapping.
     *
     * @var string
     */
    protected $environmentFile = '.env';

    /**
     * The application namespace.
     *
     * @var string
     */
    protected $namespace;

    /**
     * Create a new framework application instance.
     *
     * @param  string|null  $basePath
     * @return void
     */
    public function __construct($basePath = null)
    {
        if ($basePath) {
            $this->setBasePath($basePath);
        }
        // Load values from .env file.
        (new \Dotenv\Dotenv(Config::get('base_path'), $this->environmentFile))->load();
    }

    /**
     * Get the version number of the applicatinos
     *
     * @return string
     */
    public function version()
    {
        return static::VERSION;
    }

    /**
     * Set the base path for the applicatinos.
     *
     * @param  string  $basePath
     * @return $this
     */
    public function setBasePath($basePath)
    {
        $this->basePath = rtrim($basePath, '\/');

        return $this;
    }

    /**
     * Get the base path of the framework installation.
     *
     * @param  string  $path Optionally, a path to append to the base path
     * @return string
     */
    public function basePath($path = '')
    {
        return $this->basePath.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}
