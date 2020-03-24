<h1 align="center"> judger_php </h1>

<p align="center"> Judger Binder for PHP.</p>


## Installing

```shell
$ composer require princeh/judger_php -vvv
```

## Usage

此拓展基于青岛开源的沙盒
必须要装swoole 且运行在协程环境下
最好hook shell_exec在底层会自动进行协程的调度
```php
\Swoole\Coroutine\Co::set(['hook_flags' => SWOOLE_HOOK_BLOCKING_FUNCTION]);
```


## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/princeh/judger_php/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/princeh/judger_php/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT