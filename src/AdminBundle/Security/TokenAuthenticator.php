<?php
namespace AdminBundle\Security;
 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Doctrine\ORM\EntityManager;
 
class TokenAuthenticator extends AbstractGuardAuthenticator
{
    private $em;
 
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
 
    /**
     * Called on every request. Return whatever credentials you want,
     * or null to stop authentication.
     */
    public function getCredentials(Request $request)
    {
        if (!$token = $request->headers->get('X-AUTH-TOKEN')) {
            // no token? Return null and no other methods will be called
            // 没有token就返回null，不调用其他方法
            return;
        }
 
        // What you return here will be passed to getUser() as $credentials
        // 这里你返回的值，将被作为$credentials传入getUser()
        return array(
            'token' => $token,
        );
    }
 
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $apiKey = $credentials['token'];
 
        // if null, authentication will fail
        // 如果是空，认证失败
        // if a User object, checkCredentials() is called
        // 如果是个User对象，checkCredentials()将被调用
        return $this->em->getRepository('AppBundle:User')
            ->findOneBy(array('apiKey' => $apiKey));
    }
 
    public function checkCredentials($credentials, UserInterface $user)
    {
        // check credentials - e.g. make sure the password is valid
        // 检查credentials - 比如，确保密码是有效的
        // no credential check is needed in this case
        // 但在本例中并不需要对credential检查
        // return true to cause authentication success
        // 返回true即是认证成功
        var_dump('11');
        return true;
    }
 
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        // on success, let the request continue
        // 成功之后，让请求继续
        var_dump('222');
        return null;
    }
 
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        $data = array(
            'message' => strtr($exception->getMessageKey(), $exception->getMessageData())
 
            // or to translate this message
            // 或者翻译信息如下
            // $this->translator->trans($exception->getMessageKey(), $exception->getMessageData())
        );
 var_dump('333');
        return new JsonResponse($data, 403);
    }
 
    /**
     * Called when authentication is needed, but it's not sent
     */
    public function start(Request $request, AuthenticationException $authException = null)
    {
        $data = array(
            // you might translate this message
            // 你也可以翻译这条信息
            'message' => 'Authentication Required'
        );
 var_dump('444');
        return new JsonResponse($data, 401);
    }
 
    public function supportsRememberMe()
    {var_dump('555');
        return false;
    }
}