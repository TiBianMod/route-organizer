<?php

namespace TiBian\RouteOrganizer;

use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

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
     * @var \Symfony\Component\Finder\Finder
     */
    protected $finder;

    /**
     * @var \Symfony\Component\Finder\SplFileInfo
     */
    protected $file;

    /**
     * RouteOrganizer constructor.
     *
     * @param string $path
     */
    public function __construct($path)
    {
        $this->routePath = base_path($path);

        $this->finder = new Finder();

        $this->createRoutePath();

        $this->process();
    }

    /**
     * Create Route Path
     */
    protected function createRoutePath()
    {
        if (! file_exists($this->routePath)) {
            mkdir($this->routePath, 0755, true);
        }
    }

    /**
     * Process the Request
     */
    protected function process()
    {
        collect($this->getResources())->each(function (SplFileInfo $file) {
            $this->file = $file;

            $this->requireRoute();
        });
    }

    /**
     * Require Route Files
     */
    protected function requireRoute()
    {
        if ($this->isExtension('php')) {
            $this->isRequired();
        }
    }

    /**
     * Get File Resources
     *
     * @return \Symfony\Component\Finder\Finder|\Symfony\Component\Finder\SplFileInfo[]
     */
    protected function getResources()
    {
        return $this->finder->files()->in($this->routePath);
    }

    /**
     * Checks if the file is a specific extension.
     *
     * @param string $extension
     * @return bool
     */
    protected function isExtension($extension)
    {
        return strtolower($this->file->getExtension()) == strtolower($extension);
    }

    /**
     * Require/Include the specific File.
     */
    protected function isRequired()
    {
        if ($this->file->isFile()) {
            require $this->file->getRealPath();
        }
    }
}
