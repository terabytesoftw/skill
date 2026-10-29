# Synthetic cache contract

This fixture is not copied from a real repository.

## `src/CacheInterface.php`

```php
interface CacheInterface
{
    public function get(string $key): mixed;
}
```

## `src/ArrayCache.php`

```php
final class ArrayCache implements CacheInterface
{
    /** @var array<string, array{value: mixed, expiresAt: int|null}> */
    private array $entries = [];

    public function get(string $key): mixed
    {
        $entry = $this->entries[$key] ?? null;

        if ($entry === null || ($entry['expiresAt'] !== null && $entry['expiresAt'] <= time())) {
            unset($this->entries[$key]);
            return null;
        }

        return $entry['value'];
    }
}
```

## Known callers

- `SessionStore` treats `null` as a cache miss.
- `CacheMetrics` counts physical entries after reads.
- Tests cover expired reads and physical cleanup in the same call.

## Requested change

Return `null` for expired entries without deleting them immediately.
