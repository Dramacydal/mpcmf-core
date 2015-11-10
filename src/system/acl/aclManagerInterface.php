<?php

namespace mpcmf\system\acl;

use mpcmf\modules\moduleBase\actions\action;
use mpcmf\modules\moduleBase\models\modelBase;

/**
 * Base system ACL manager
 *
 * @author Gregory Ostrovsky <greevex@gmail.com>
 */
interface aclManagerInterface
{

    /**
     * @param action $action
     * @param string $tokenString
     * @param bool $checkLimits
     *
     * @return array Response
     */
    public function checkActionAccessByToken(action $action, $tokenString, $checkLimits = true);

    /**
     * @param action $action
     * @param modelBase $userModel
     *
     * @return array Response
     */
    public function checkActionAccess(action $action, modelBase $userModel);

    /**
     * @param mixed $data
     *
     * @return string
     */
    public function generateSign($data);
}