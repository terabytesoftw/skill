# PHPDoc examples

These examples request documentation patches only. They do not create, migrate, or run tests.

## Document a generic map

### Document a generic map: Prompt

```text
Use `$phpdoc` to inspect `docs/fixtures/phpdoc-user-map.php` and propose the smallest PHPDoc-only patch that preserves
type information PHP cannot express natively.

Do not edit the fixture, change behavior, add summaries that repeat names, invent nullability, or document the obvious
constructor and loop. Return only the proposed diff and a short evidence note.
```

### Document a generic map: Minimum context

- The synthetic file contains the complete `User` and `UserMap` implementation.
- The return map is built with `User::$id` keys and `User` values.

### Document a generic map: Illustrative output

```diff
 final class UserMap
 {
+    /** @return array<string, User> */
     public function allById(): array
```

Evidence note: the loop assigns each `User` to a string identifier key; native `array` cannot express that map.

### Document a generic map: Verification

- The generic key and value types follow the actual assignment.
- No class, constructor, or method summary repeats the declaration.
- `php -l docs/fixtures/phpdoc-user-map.php` checks only syntax; it does not prove the proposed generic.

### Document a generic map: Limits

The fixture does not establish whether duplicate user identifiers are valid or whether a narrower string type exists.

## Document a structured dataset

### Document a structured dataset: Prompt

```text
Use `$phpdoc` to inspect `docs/fixtures/phpdoc-dataset.php` and propose only the static-analysis return type missing from
`EmailCases::invalid()`.

Do not add a class summary, method summary, provider prose, test-coverage section, or `see` tag. Do not create, rename,
or run tests. Return a minimal diff and explain how every shape field is evidenced by the returned arrays.
```

### Document a structured dataset: Minimum context

- The synthetic file is the complete dataset provider.
- Both entries have `input` and non-empty `reason` string keys.

### Document a structured dataset: Illustrative output

```diff
 final class EmailCases
 {
+    /** @return list<array{input: string, reason: non-empty-string}> */
     public static function invalid(): array
```

### Document a structured dataset: Verification

- Every returned element has the documented keys and value types.
- The outer array uses consecutive integer keys, supporting `list`.
- The patch adds no descriptive PHPDoc that restates `invalid()`.

### Document a structured dataset: Limits

The shape describes only the supplied fixture. A real provider may require a broader type after inspecting all branches.

[Back to usage examples](../examples.md)
