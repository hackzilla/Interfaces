<?php

namespace Hackzilla\Interface\User\UserInterface;

interface UserInterface
{
	public function getCurrentUser();
	public function getUserById($userId);
	public function hasRole($user, $role);
}
