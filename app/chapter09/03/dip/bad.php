<?php

class FileStorage
{
    public function save(string $data): void
    {
        // データをファイルに保存する処理
        echo "ファイルに $data を保存しました。\n";
    }
}

class DataProcessor
{
    private FileStorage $storage;

    public function __construct()
    {
        // ここで直接依存
        $this->storage = new FileStorage();
    }

    public function process(string $data): void
    {
        // データ処理後、保存
        $this->storage->save($data);
    }
}

// 使用例
$processor = new DataProcessor();
$processor->process('Sample Data');
