<?php

/**
 * Tests for \digitalfiz\MinecraftUtilities\AvatarUtility
 *
 * @covers digitalfiz\MinecraftUtilities
 * 
 */
class ConfigurationTest extends \PHPUnit_Framework_TestCase {
    protected function setUp() {
        // Nothing Yet
    }

    /**
     * @covers digitalfiz\MinecraftUtilities\AvatarUtility::getAvatarFace
     */
    public function testGetAvatarFaceReturnsTrue() {
        $avatar = 'digitalfiz';
        $this->assertTrue(digitalfiz\MinecraftUtilities\AvatarUtility::getAvatarFace($avatar, 128, $avatar.".png"));
    }

    /**
     * @covers digitalfiz\MinecraftUtilities\AvatarUtility::getFullAvatar
     */
    public function testGetFullAvatarReturnsTrue() {
        $avatar = 'digitalfiz';
        $this->assertTrue(digitalfiz\MinecraftUtilities\AvatarUtility::getFullAvatar($avatar, 128, $avatar."_full.png"));
    }

    /**
     * @covers digitalfiz\MinecraftUtilities\AvatarUtility::getAvatarFace
     *
     * @expectedException Exception
     */
    public function testGetAvatarFaceReturnsExceptionOnFail() {
        $avatar = 'digitalfiz';
        digitalfiz\MinecraftUtilities\AvatarUtility::getAvatarFace($avatar, 128, "/path/should/not/exist/".$avatar.".png");
    }

    /**
     * @covers digitalfiz\MinecraftUtilities\AvatarUtility::getFullAvatar
     *
     * @expectedException Exception
     */
    public function testGetFullAvatarReturnsExceptionOnFail() {
        $avatar = 'digitalfiz';
        digitalfiz\MinecraftUtilities\AvatarUtility::getFullAvatar($avatar, 128, "/path/should/not/exist/".$avatar.".png");
    }


}