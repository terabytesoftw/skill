# Synthetic client rename

Requested implementation:

- Add `Client::dispatch()` with the behavior currently provided by `Client::send()`.
- Keep `send()` as a deprecated forwarding method for one compatibility cycle.
- Update internal callers and public examples to `dispatch()`.
- Preserve return values and exception behavior.
- Add focused coverage for both names.
- Do not commit, push, publish, or change unrelated APIs.

Affected paths in the synthetic project are `src/Client.php`, `tests/ClientTest.php`, `README.md`, and `CHANGELOG.md`.
