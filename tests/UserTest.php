<?php


class UserTest extends TestBase {

    /** @test */
    function it_is_instantiatible()
    {
        $this->assertInstanceOf(
            'Reactor\Users\User',
            new Reactor\Users\User
        );
    }

}