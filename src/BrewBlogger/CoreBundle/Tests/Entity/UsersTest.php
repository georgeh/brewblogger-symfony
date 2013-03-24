<?php
namespace BrewBlogger\CoreBundle\Tests\UsersTest;
/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use BrewBlogger\CoreBundle\Entity\Users;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;

/**
 * Description of UsersTest
 *
 * @author George Hotelling <george@hotelling.net>
 */
class UsersTest extends \PHPUnit_Framework_TestCase {
    
    /**
     * @var Users
     */
    protected $user;

    public function setUp() {
        $this->user = new Users();
        parent::setUp();
    }


    public function testLegacyPasswordsAreUnsaltedMD5()
    {
        $password = 'OneTwoThreeFourFive';
        $this->user->setPassword(md5($password));
        
        $factory = new EncoderFactory(array('Symfony\Component\Security\Core\User\UserInterface' => array(
            'class' => 'Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder',
            'arguments' => array('md5', false, 1),
        )));

        $encoder = $factory->getEncoder($this->user);
        $encodedPassword = $encoder->encodePassword($password, $this->user->getSalt());
        
        $this->assertEquals($this->user->getPassword(), $encodedPassword);
    }
}
