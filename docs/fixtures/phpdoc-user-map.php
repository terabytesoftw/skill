<?php

declare(strict_types=1);

final class User
{
    public function __construct(public string $id) {}
}

final class UserMap
{
    /** @param list<User> $users */
    public function __construct(private array $users) {}

    public function allById(): array
    {
        $result = [];

        foreach ($this->users as $user) {
            $result[$user->id] = $user;
        }

        return $result;
    }
}
