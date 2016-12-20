<?php

namespace Topxia\WebBundle\Extensions\DataTag\Test;

use Biz\BaseTestCase;;
use Topxia\WebBundle\Extensions\DataTag\CourseRankByStudentDataTag;

class CourseRankByStudentDataTagTest extends BaseTestCase
{   

    public function testGetData()
    {
        $datatag = new CourseRankByStudentDataTag();
        $courses = $datatag->getData(array('count' => 5));

        $this->assertEquals(0, count($courses));
    }

}