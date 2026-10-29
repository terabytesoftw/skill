<!-- markdownlint-disable MD041 -->
<h1 align="center">Personal Agent Skills</h1>
<!-- markdownlint-enable MD041 -->

<p align="center">
    <a href="https://github.com/terabytesoftw/skill/actions/workflows/quality.yml" target="_blank">
        <img src="https://img.shields.io/github/actions/workflow/status/terabytesoftw/skill/quality.yml?style=for-the-badge&label=Quality&logo=github" alt="Quality">
    </a>
    <a href="https://github.com/terabytesoftw/skill/actions/workflows/security.yml" target="_blank">
        <img src="https://img.shields.io/github/actions/workflow/status/terabytesoftw/skill/security.yml?style=for-the-badge&label=Security&logo=github" alt="Security">
    </a>
</p>

<p align="center">
    <strong>Portable personal agent skills for coding agents</strong><br>
    <em>Evidence-based review, planning, documentation, and research workflows</em>
</p>

Portable agent skills maintained by Terabytesoftw. Each skill is self-contained under [`skills/`](skills/) and follows
the [Agent Skills](https://agentskills.io/specification) directory format.

## Getting started

### Composer

Publish `terabytesoftw/skill` on Packagist before using the normal installation below. Create `skills.json` first when
the consumer needs a reproducible target and an exact Composer trust list:

```json
{
  "target": ".agents/skills",
  "aliases": [".claude/skills"],
  "auto-sync": true,
  "vendor-sources": false,
  "dependencies": {
    "composer": {
      "trusted-replace": true,
      "trusted": ["terabytesoftw/skill"]
    }
  }
}
```

```bash
composer config allow-plugins.llm/skills true
composer require --dev llm/skills:1.15.0 terabytesoftw/skill:^0.1@dev
composer skills:show
```

`^0.1@dev` is a development-compatible constraint, not a stable release or an exact pin. The package maps `dev-main` to
`0.1.x-dev`; the consuming project's lock file records the selected commit. Review changes before updating.

The package publishes `extra.skills.source: skills` for the [`llm/skills`](https://github.com/roxblnfk/skills) Composer
plugin. `composer skills:show` verifies the donor and synchronization state; it does not prove that a coding client
discovered or loaded a skill. Confirm the desired skill in the client from the consuming project or package root.

For local package development, use a Composer `path` repository from a disposable consumer and require
`terabytesoftw/skill:dev-main`. Keep that path override out of shared project metadata unless the team intentionally
uses the same checkout layout.

### Skills CLI

As an optional client-independent route, select and install skills from the repository:

```bash
npx skills@latest add terabytesoftw/skill
```

This route requires the external `skills` CLI and its supported Node.js runtime. Composer remains the primary
distribution metadata for this repository.

### Use a skill

Ask the client to use the desired skill and provide its required inputs. For an adversarial review, specify:

- provider and model for each reviewer;
- effort for each reviewer, preserving an explicit value or using `default` when none is specified;
- maximum review rounds;
- a cost ceiling when the active host can enforce or report one; and
- `manual`, `sequential`, or `stop` as the fallback.

The skill verifies active client capabilities before dispatch. Model selection, cost limits, external calls, and
source-code transmission are never inferred from installation.

## Skills

The catalog contains seven skills:

| Skill                  | Purpose                                                         |
| ---------------------- | --------------------------------------------------------------- |
| [adversarial-review]   | Critical review with independent contexts or disclosed fallback |
| [analyze-first]        | Inspect a non-trivial problem before implementation             |
| [assumption-tracking]  | Expose and validate material assumptions                        |
| [conventional-commits] | Prepare commit text and one changelog entry per PR              |
| [phpdoc]               | Preserve useful PHPDoc and static-analysis types                |
| [plan-then-execute]    | Plan multi-step or high-risk work before implementation         |
| [research-protocol]    | Verify version-specific behavior from primary sources           |

[adversarial-review]: skills/adversarial-review/SKILL.md
[analyze-first]: skills/analyze-first/SKILL.md
[assumption-tracking]: skills/assumption-tracking/SKILL.md
[conventional-commits]: skills/conventional-commits/SKILL.md
[phpdoc]: skills/phpdoc/SKILL.md
[plan-then-execute]: skills/plan-then-execute/SKILL.md
[research-protocol]: skills/research-protocol/SKILL.md

[`CATALOG.md`](CATALOG.md) records the inventory, inclusion decisions, exclusions, and provenance boundaries.

## Usage examples

[Copyable prompts and illustrative outputs](docs/examples.md) provide two practical scenarios for every skill. Each
example states its minimum context, expected artifact, verification criteria, and limits. The separate
[cross-client evaluation](docs/evaluation-results.md) records actual Claude Code, Codex, and GitHub Copilot runs without
turning observed output into the expected answer.

### Testing skills

This catalog intentionally does not duplicate skills for creating, migrating, configuring, or running PHP tests.
[Testo](https://github.com/php-testo/testo) maintains those workflows in its
[official skill catalog](https://github.com/php-testo/testo/tree/1.x/skills), publishes the directory through
`extra.skills.source`, and documents automatic project installation through the suggested `llm/skills` Composer plugin.
The local `phpdoc` skill only preserves useful documentation and type information when test code is already in scope.

## Maintenance

Composer contains distribution metadata only. CI invokes Composer validation, repository linters, workflow security
checks, and evaluation patch validation directly.

Behavioral cases live under [`evals/adversarial-review/`](evals/adversarial-review/). They are maintainer evaluations,
not product testing skills or unit tests, and never contact external providers automatically.

## 📄 License

[![License](https://img.shields.io/badge/License-BSD--3--Clause-brightgreen.svg?style=for-the-badge&logo=opensourceinitiative&logoColor=white&labelColor=555555)](LICENSE)

Original repository work is available under the [BSD 3-Clause License](LICENSE). The adversarial-review skill retains
the notices and license texts required by the review material identified in its
[provenance reference](skills/adversarial-review/references/provenance.md).
