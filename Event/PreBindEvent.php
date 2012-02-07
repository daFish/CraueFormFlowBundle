<?php
/**
 * @author Marcus Stöhr <dafish@soundtrack-board.de>
 * @copyright 2011 Christian Raue
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Craue\FormFlowBundle\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Is called once prior to binding any (neither saved nor request) data.
 * You can use this method to define steps to skip prior to determinating the current step, e.g. based on custom
 * session data.
 */
class PreBindEvent extends Event
{
    /**
     * @var array
     */
    private $formData;

    /**
     * @param array $formData
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    /**
     * @return array
     */
    public function getFormData()
    {
        return $this->formData;
    }
}