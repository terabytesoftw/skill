# Synthetic ordinary change summary

- A cache lookup treated stored `false`, `0`, and an empty string as misses.
- The implementation now checks key presence separately from value truthiness.
- Focused regression coverage was added.
- No public API changed.

The target repository uses Conventional Commits and flat bullets under its active changelog version.
