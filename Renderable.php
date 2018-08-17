<?php

namespace Peak\Blueprint;

interface Renderable
{
    /**
     * Render the object contents and return it
     *
     * @return string
     */
    public function render();
}
