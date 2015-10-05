<?php
namespace TYPO3\TYPO3CR\Domain\Model;

/*
 * This file is part of the TYPO3.TYPO3CR package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use TYPO3\Flow\Annotations as Flow;

/**
 * A content dimension for nodes
 */
class ContentDimension
{
    /**
     * @var string
     */
    protected $identifier;

    /**
     * @var string
     */
    protected $default;

    /**
     * @param string $identifier
     * @param string $default
     */
    public function __construct($identifier, $default)
    {
        $this->identifier = $identifier;
        $this->default = $default;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @return string
     */
    public function getDefault()
    {
        return $this->default;
    }
}
