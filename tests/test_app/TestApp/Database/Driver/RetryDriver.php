<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         4.2.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace TestApp\Database\Driver;

use Cake\Database\Driver\Sqlite;

class RetryDriver extends Sqlite
{
    /**
     * @inheritDoc
     */
    protected const CONNECT_RETRY_ERROR_CODES = [
        0,
    ];

    /**
     * @inheritDoc
     */
    protected const CONNECT_RETRY_INTERVAL = 1;

    /**
     * @inheritDoc
     */
    protected const CONNECT_RETRY_ATTEMPTS = 1;

    /**
     * @inheritDoc
     */
    public function connect(): bool
    {
        $this->_connect('fake:database', $this->_config);

        return true;
    }

    public function enabled(): bool
    {
        return true;
    }
}
