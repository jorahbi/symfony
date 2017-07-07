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
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
 
class TokenAuthenticator extends AbstractGuardAuthenticator
{
    private $em;
    private $encoder;
 
    public function __construct(EntityManager $em, UserPasswordEncoder $encoder)
    {
        $this->em = $em;
        $this->encoder = $encoder;
    }
 
    /**
     * 1、每次都会调用返回null就不调用其它方法了 返回值做为getUser的第一个参数传入
     * @param $request 
     * @return []
     */
    public function getCredentials(Request $request)
    {

        
        /*throw new CustomUserMessageAuthenticationException(
                'ILuvAPIs is not a real API key: it\'s just a silly phrase'
            );*/
          // var_dump($request->headers->get('X-AUTH-TOKEN'));die;
        /*if (!$token = $request->headers->get('X-AUTH-TOKEN')) 
        {
            return;
        }*/
        var_dump($request->getSession()->get('role'));
        if(!$request->get('_username'))
        {

            return null;
        }


        return [
            'username' => $request->get('_username'),
            'password' => $request->get('_password')
        ];
        //
        //return $return;
    }
    
    /**
     * 2、获取用户数据
     * @param $credentials self getCredentials 的非空返回值
     * @param $userProvider 实现UserProviderInterface接口的 User Provider 类
     * @return UserInterface
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        return $this->em->getRepository('AdminBundle:Admin')
            ->findOneBy(array('username' => $credentials['username']));
    }
    
    /**
     * 3、认证
     * @param $credentials
     * @param $user self getUser 返回的实现UserInterface 对象
     * @return true 认证成功 other 认证失败
     */
    public function checkCredentials($credentials, UserInterface $user)
    {

        if($this->encoder->encodePassword($user, $credentials['password']) != $user->getPassword())
        {
            throw new CustomUserMessageAuthenticationException('用户名或者密码不正确');
        }
        
        return true;
    }

    /**
     * 认证成功时执行
     * @param Request
     * @param TokenInterface
     * @param $providerKey security.yml firewalls.main | ...
     * @return Response | null 
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        //file_put_contents('filename.txt', 'asfasdfasdf\n', FILE_APPEND);
        // on success, let the request continue
        // 成功之后，让请求继续
        $request->getSession()->set('role', 'sadfsd:asdfsd:asdfsdf');
        $request->getSession()->set('admin_id', '1');
        return null;
    }
    
    /**
     * 认证失败时执行
     * @param Request
     * @param AuthenticationException
     * @return Response
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        $data = array(
            'message' => strtr($exception->getMessageKey(), $exception->getMessageData())
 
            // or to translate this message
            // 或者翻译信息如下
            // $this->translator->trans($exception->getMessageKey(), $exception->getMessageData())
        );

        return new JsonResponse($data, 403);
    }
 
    /**
     * self getCredentials() 返回null 时执行
     * @param Request
     * @param AuthenticationException
     * @return Response
     */
    public function start(Request $request, AuthenticationException $authException = null)
    {
        $data = array(
            // you might translate this message
            // 你也可以翻译这条信息
            'message' => 'Authentication Required'
        );

        return new JsonResponse($data, 401);
    }
 
    /**
     * remember me 功能
     * @return bool
     */
    public function supportsRememberMe()
    {
        return false;
    }

    /**
     * 如果你实现的是 GuardAuthenticatorInterface 接口而不是继承 AbstractGuardAuthenticator 抽象类，你就得使用本方法
     * @param UserInterface
     * @param providerKey
     * @return token
     */
    /*public function createAuthenticatedToken(UserInterface $user, string $providerKey)
    {

    }*/
}