<?php namespace Cribbb\Domain\Model\Identity;

use Rhumsaa\Uuid\Uuid;
use Cribbb\Domain\Identifier;
use Cribbb\Domain\UuidIdentifier;

class UserId extends UuidIdentifier implements Identifier
{
    /**
     * @var Uuid
     */
    protected $value;

    /**
     * Create a new UserId
     *
     * @return void
     */
    public function __construct(Uuid $value)
    {
        $this->value = $value;
    }
}
