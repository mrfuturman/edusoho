<?php

namespace Topxia\WebBundle\Extensions\DataTag\Test;

use Biz\BaseTestCase;;
use Topxia\WebBundle\Extensions\DataTag\ElitedCourseQuestionsDataTag;

class ElitedCourseQuestionsDataTagTest extends BaseTestCase
{   

    public function testGetData()
    {
        $datatag = new ElitedCourseQuestionsDataTag();
        $datatag->getData(array('courseId' => 1, 'count' => 5));

    }

}