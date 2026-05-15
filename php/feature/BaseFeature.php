<?php
declare(strict_types=1);

// NoAsAService SDK base feature

class NoAsAServiceBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(NoAsAServiceContext $ctx, array $options): void {}
    public function PostConstruct(NoAsAServiceContext $ctx): void {}
    public function PostConstructEntity(NoAsAServiceContext $ctx): void {}
    public function SetData(NoAsAServiceContext $ctx): void {}
    public function GetData(NoAsAServiceContext $ctx): void {}
    public function GetMatch(NoAsAServiceContext $ctx): void {}
    public function SetMatch(NoAsAServiceContext $ctx): void {}
    public function PrePoint(NoAsAServiceContext $ctx): void {}
    public function PreSpec(NoAsAServiceContext $ctx): void {}
    public function PreRequest(NoAsAServiceContext $ctx): void {}
    public function PreResponse(NoAsAServiceContext $ctx): void {}
    public function PreResult(NoAsAServiceContext $ctx): void {}
    public function PreDone(NoAsAServiceContext $ctx): void {}
    public function PreUnexpected(NoAsAServiceContext $ctx): void {}
}
