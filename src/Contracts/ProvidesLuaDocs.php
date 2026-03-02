<?php

namespace OpenCompany\IntegrationCore\Contracts;

interface ProvidesLuaDocs
{
    /**
     * Return the absolute path to a markdown file with supplementary Lua API documentation.
     *
     * This content is appended when an agent reads the integration's namespace docs
     * via lua_read_doc. Use it for integration-specific examples, workflows, or gotchas
     * that aren't captured by the auto-generated parameter reference.
     */
    public function luaDocsPath(): string;
}
