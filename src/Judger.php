<?php


namespace Princeh\JudgerPhp;
use Swoole\Process;
class Judger
{
    protected $max_cpu_time, $max_real_time, $max_memory, $max_stack, $max_output_size, $max_process_number, $exe_path, $input_path, $output_path, $error_path, $args, $env, $log_path, $seccomp_rule_name, $uid, $gid, $memory_limit_check_only;
    protected $proc_args = [];

    /**
     * Judger constructor.
     * @param int $max_cpu_time
     * @param int $max_real_time
     * @param int $max_memory
     * @param int $max_stack
     * @param int $max_output_size
     * @param int $max_process_number
     * @param string $exe_path
     * @param string $input_path
     * @param string $output_path
     * @param string $error_path
     * @param array $args
     * @param array $env
     * @param string $log_path
     * @param string $seccomp_rule_name
     * @param int $uid
     * @param int $gid
     * @param int $memory_limit_check_only
     */
    public function __construct(int $max_cpu_time, int $max_real_time, int $max_memory, int $max_stack, int $max_output_size, int $max_process_number, string $exe_path, string $input_path, string $output_path, string $error_path, array $args, array $env, string $log_path, string $seccomp_rule_name, int $uid, int $gid, int $memory_limit_check_only = 0)
    {
        $this->max_cpu_time = $max_cpu_time;
        $this->max_real_time = $max_real_time;
        $this->max_memory = $max_memory;
        $this->max_stack = $max_stack;
        $this->max_output_size = $max_output_size;
        $this->max_process_number = $max_process_number;
        $this->exe_path = $exe_path;
        $this->input_path = $input_path;
        $this->output_path = $output_path;
        $this->error_path = $error_path;
        $this->args = $args;
        $this->env = $env;
        $this->log_path = $log_path;
        $this->seccomp_rule_name = $seccomp_rule_name;
        $this->uid = $uid;
        $this->gid = $gid;
        $this->memory_limit_check_only = $memory_limit_check_only;
        foreach ($env as $item)
        {
            array_push($this->proc_args,"--env={$item}");
        }
        foreach ($args as $item)
        {
            array_push($this->proc_args,"--args={$item}");
        }
        foreach (Val::$int_vars as $item)
        {
            array_push($this->proc_args,"--$item={$$item}");
        }
        foreach (Val::$str_vars as $item)
        {
            array_push($this->proc_args,"--$item={$$item}");
        }
    }

    public function run() : array
    {
        $cmd = Val::$so_path ." " .implode(" ",$this->proc_args);
        $result = shell_exec($cmd);
        return json_decode($result,True);
    }
}