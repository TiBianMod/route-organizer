<?php

namespace TiBian\RouteOrganizer;

use TiBian\Resources\Path;

/**
 * Class RouteOrganizer
 *
 * @package TiBian\RouteOrganizer
 */
class RouteOrganizer
{
    /**
     * @var string
     */
    protected $routePath;

    /**
     * RecursiveIteratorIterator
     *
     * @var object Path
     */
    protected $path;

    /**
     * Routes constructor.
     */
    public function __construct()
    {
        $this->routePath = config('route-organizer.routePath');

        $this->createRoutePath();

        $this->path = new Path($this->routePath);

        $this->process();
    }

    private function createRoutePath()
    {
        if (! file_exists($this->routePath)) {
            mkdir($this->routePath, 0755);
        }
    }

    private function process()
    {
        foreach ($this->path->getResources() as $r) {
            if ($this->path->isExtension('php')) {
                $this->path->isRequired();
            }
        }
    }
}
