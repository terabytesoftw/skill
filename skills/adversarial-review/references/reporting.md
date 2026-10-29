# Reporting and closure

Lead with the outcome and identify the reviewed artifact, baseline, environment, and execution mode: independent pair,
manual packets, or non-independent sequential self-review.

## Findings

For each confirmed finding include:

- precise file and line, symbol, section, or stable anchor;
- impact, affected party, and required trigger;
- applicable contract and causal evidence;
- verification actually performed and its limits;
- decisive counterevidence considered;
- severity and confidence as separate judgments; and
- the smallest corrective action that restores the intended contract.

Use the project's severity taxonomy when supplied. Otherwise:

| Severity | Basis                                                                                           |
| -------- | ----------------------------------------------------------------------------------------------- |
| Critical | Established realistic path to exceptionally severe harm, broad compromise, or irreversible loss |
| High     | Major correctness, security, compatibility, or workflow failure on a supported reachable path   |
| Medium   | Bounded but material failure or demonstrated maintenance mechanism with concrete consequences   |
| Low      | Small demonstrated impact worth correcting within scope                                         |

Do not label an uncertain hypothesis as low severity. Put it under pending candidates or coverage limits.

## Candidate disposition

Summarize dismissed candidates with the counterevidence that resolved them when that audit trail is useful. List pending
candidates separately with the missing evidence required for resolution. Neither belongs in the confirmed finding count.

## Capabilities and limits

Report:

- requested provider, model, and effort for each role, using `default` when effort was omitted;
- settings the host reported as accepted or applied for each actual run;
- whether initial contexts were separate;
- rounds used and the evidence that justified a second round;
- whether a cost ceiling was enforced, merely reported, or unavailable; and
- tests, reproductions, and static checks actually completed.

In a visible `Effort` field, preserve an explicitly requested value; otherwise use `default`, including when the host
does not expose the applied effort. Record requested, accepted or applied, and observed evidence separately, and note
the missing observation in prose. `default` does not certify an internal reasoning level.

Distinguish no findings within reviewed scope from incomplete requested coverage. Do not imply exhaustive safety.

Reports remain private unless the user authorizes a destination. Review-only authorization does not permit fixes, saved
repository reports, staging, commits, pushes, messages, or publication.
