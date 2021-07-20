<?php declare(strict_types=1);

namespace App\Tests\Unit\Controller\Jury;

use App\DataFixtures\Test\AddJudgehostRestrictionFixture;
use App\DataFixtures\Test\SampleJudgehostRestrictionFixture;
use App\Entity\JudgehostRestriction;

class JudgehostRestrictionsControllerTest extends JuryControllerTest
{
    protected static $baseUrl          = '/jury/judgehost-restrictions';
    protected static $exampleEntries   = ['No'];
    protected static $shortTag         = 'judgehost restriction';
    protected static $deleteEntities   = ['name' => ['TestRestriction']];
    protected static $getIDFunc        = 'getRestrictionid';
    protected static $className        = JudgehostRestriction::class;
    protected static $DOM_elements     = ['h1' => ['Judgehost restrictions']];
    protected static $deleteFixtures   = [AddJudgehostRestrictionFixture::class];
    protected static $addForm          = 'judgehost_restriction[';
    protected static $addEntitiesCount = ['contests','problems','languages'];
    protected static $addEntitiesShown = ['name'];
    protected static $addEntities      = [['name' => 'Restriction',
                                           'contests' => ['0' => '1', '1' => '2'],
                                           'problems' => ['0' => '1', '1' => '2'],
                                           'languages' => ['0' => 'adb', '1' => 'awk'],
                                           'rejudge_own' => '1'],
                                          ['name' => 'NonRestricted',
                                           'contests' => [],
                                           'problems' => [],
                                           'languages' => []],
                                          ['name' => 'HighCountNumbers',
                                           'languages' => ['0' => 'adb', '1' => 'awk', '2' => 'swift',
                                                           '3' => 'r', '4' => 'rb', '5' => 'plg']],
                                          ['name' => 'NoJudgeOwn',
                                           'rejudge_own' => '0']];
}