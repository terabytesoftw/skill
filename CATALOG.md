# Skill catalog decisions

This catalog records the 2026-10-29 inventory of the user's local skill directory. It prevents system, provider,
private, or package-specific material from being silently copied into this public repository.

## Included

- [`adversarial-review`](skills/adversarial-review/SKILL.md) is a portable adaptation of the user's private review
  workflow. It is BSD-3-Clause and retains the MIT notices for attributed influences. Fixed local reviewer requirements
  became invocation-time choices.
- [`analyze-first`](skills/analyze-first/SKILL.md) is a generic, self-contained local workflow under BSD-3-Clause.
- [`assumption-tracking`](skills/assumption-tracking/SKILL.md) is a generic, self-contained local workflow under
  BSD-3-Clause.
- [`conventional-commits`](skills/conventional-commits/SKILL.md) is a local repository workflow with authorization
  boundaries under BSD-3-Clause.
- [`phpdoc`](skills/phpdoc/SKILL.md) consolidates the user's production and test PHPDoc guidance without adding a test
  workflow. It is distributed under BSD-3-Clause.
- [`plan-then-execute`](skills/plan-then-execute/SKILL.md) is a generic, self-contained local workflow under
  BSD-3-Clause.
- [`research-protocol`](skills/research-protocol/SKILL.md) is a generic, version-aware local workflow under
  BSD-3-Clause.

The source skills were copied from the user's non-system local skill directories, then checked for absolute private
paths, credentials, fixed model requirements, and provider-only APIs. No sessions, credentials, client configuration,
`.system` content, operating-system symlink targets, or plugin-cache files were copied.

## Excluded

- `yii2-docs-maintenance` contains private checkout paths and repository-specific decisions. It remains with the Yii2
  documentation project.
- `diagnose-crash`, `omarchy`, and `omarchy-app` are operating-system-provided links, not user-owned source.
- `.system/*` contains client-provided internal skills.
- Plugin cache skills have separate providers, distribution, and licenses.
- `phpdoc-tests` was consolidated into `phpdoc`; its old name implied a testing workflow this catalog does not provide.
- PHP test workflows remain in [Testo's canonical skills](https://github.com/php-testo/testo/tree/1.x/skills), including
  writing, running, configuration, migration, and coverage.

Official Yii3 skills remain in [`yii3/skill`](https://github.com/yii3/skill). Other package-specific Yii and PHP Forge
skills should remain in their canonical package repositories; this first phase does not copy or fork them.
