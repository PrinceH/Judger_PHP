<?php
namespace Princeh\JudgerPhp;
class Val {
    static $int_vars = ["max_cpu_time", "max_real_time",
        "max_memory", "max_stack", "max_output_size",
        "max_process_number", "uid", "gid", "memory_limit_check_only","seccomp_rule_name"];
    static $str_vars = ["exe_path", "input_path", "output_path", "error_path", "log_path"];
    static $so_path = "/usr/lib/judger/libjudger.so";

    static $UNLIMITED = -1;
    static $VERSION = 0x020101;

    static $RESULT_SUCCESS = 0;
    static $RESULT_WRONG_ANSWER = -1;
    static $RESULT_CPU_TIME_LIMIT_EXCEEDED = 1;
    static $RESULT_REAL_TIME_LIMIT_EXCEEDED = 2;
    static $RESULT_MEMORY_LIMIT_EXCEEDED = 3;
    static $RESULT_RUNTIME_ERROR = 4;
    static $RESULT_SYSTEM_ERROR = 5;

    static $ERROR_INVALID_CONFIG = -1;
    static $ERROR_FORK_FAILED = -2;
    static $ERROR_PTHREAD_FAILED = -3;
    static $ERROR_WAIT_FAILED = -4;
    static $ERROR_ROOT_REQUIRED = -5;
    static $ERROR_LOAD_SECCOMP_FAILED = -6;
    static $ERROR_SETRLIMIT_FAILED = -7;
    static $ERROR_DUP2_FAILED = -8;
    static $ERROR_SETUID_FAILED = -9;
    static $ERROR_EXECVE_FAILED = -10;
    static $ERROR_SPJ_ERROR = -11;
}