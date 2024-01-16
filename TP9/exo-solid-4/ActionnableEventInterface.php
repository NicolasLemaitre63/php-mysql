<?php

interface ActionnableEventInterface extends EventInterface {
    public function action() : array;
}