<?php

namespace Dommer1\Aviationstack\Resources;

class Resource {

    /**
     * Create a new resource instance.
     *
     * @param  array  $attributes
     * @return void
     */
    public function __construct(array $attributes) {
        $this->fill($attributes);
    }

    /**
     * Fill the resource with the array of attributes.
     *
     * @param  array  $attributes
     * @return void
     */
    protected function fill(array $attributes) {
        foreach ($attributes as $key => $value) {
            $key = $this->camelCase($key);

            $this->{$key} = $value;
        }
    }

    /**
     * Convert the key name to camel case.
     *
     * @param  string  $key
     * @return string
     */
    protected function camelCase($key) {
        $parts = explode('_', $key);

        foreach ($parts as $i => $part) {
            if ($i !== 0) {
                $parts[$i] = ucfirst($part);
            }
        }

        return str_replace(' ', '', implode(' ', $parts));
    }
}
