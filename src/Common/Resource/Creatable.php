<?php



namespace OpenStack\Common\Resource;

/**
 * Represents a resource that can be created.
 */
interface Creatable
{
    /**
     * Create a new resource according to the configuration set in the options.
     *
     * @param array $userOptions
     *
     * @return self
     */
    public function create(array $userOptions);
}
