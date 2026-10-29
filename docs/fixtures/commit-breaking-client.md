# Synthetic breaking change summary

- `Client::send()` was removed.
- `Client::dispatch()` is its replacement.
- Existing callers must update.
- A migration guide already explains the unchanged argument mapping.

The target repository uses Conventional Commits and one flat changelog bullet per PR.
