<?php

namespace Midnight\PermissionsModule\View\Helper;

use Midnight\Permissions\PermissionServiceInterface;
use Zend\View\Helper\AbstractHelper;

class IsAllowed extends AbstractHelper
{
    /** @var PermissionServiceInterface */
    private $permissionService;

    public function __construct(PermissionServiceInterface $permissionService)
    {
        $this->permissionService = $permissionService;
    }

    public function __invoke($user = null, string $permission, $resource = null):bool
    {
        return $this->permissionService->isAllowed($user, $permission, $resource);
    }
}
