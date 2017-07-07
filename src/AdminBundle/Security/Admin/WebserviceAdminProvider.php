<?php
namespace AdminBundle\Security\Admin;
 
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
 
class WebserviceAdminProvider implements UserProviderInterface
{
    public function loadUserByUsername($username)
    {
        // make a call to your webservice here
        // 在此调用你的webservice
        $userData = true;
        // pretend it returns an array on success, false if there is no user
        // 假设在成功时返回的是一个数组，没有用户时则返回false
 
        if ($userData) {
            $password = '...';
 
            // ...
 
            return new WebserviceAdmin($username, $password, $salt, $roles);
        }
 
        throw new UsernameNotFoundException(
            sprintf('Username "%s" does not exist.', $username)
        );
    }
 
    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof WebserviceUser) {
            throw new UnsupportedUserException(
                sprintf('Instances of "%s" are not supported.', get_class($user))
            );
        }
 
        return $this->loadUserByUsername($user->getUsername());
    }
 
    public function supportsClass($class)
    {
        return $class === 'AdminBundle\Security\Admin\WebserviceAdmin';
    }
}