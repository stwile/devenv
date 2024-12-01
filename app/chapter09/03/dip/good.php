<?php

interface StorageInterface
{
    public function save(string $data): void;
}

class FileStorage implements StorageInterface
{
    public function save(string $data): void
    {
        // データをファイルに保存する処理
        echo "ファイルに $data を保存しました。\n";
    }
}

class DatabaseStorage implements StorageInterface
{
    public function save(string $data): void
    {
        // データをデータベースに保存する処理
        echo "データベースに $data を保存しました。\n";
    }
}

class DataProcessor
{
    // 依存性の注入（Dependency Injection）
    public function __construct(private StorageInterface $storage) { }

    public function process(string $data): void
    {
        // データ処理後、保存
        $this->storage->save($data);
    }
}

// 使用例
// 使用するストレージを変更するだけでOK
$processor = new DataProcessor(new FileStorage());
$processor->process('Sample Data');

$processor = new DataProcessor(new DatabaseStorage());
$processor->process('Sample Data');
