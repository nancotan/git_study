
・git branch
並行して開発ができる
分岐して開発できる
(自分に影響が出ない）

branchはコミットを指したポインターのようなもの
HEADは自分が作業しているブランチを指し示す

新規作成
git branch ブランチ名

ブランチの一覧表示
git branch
git branch -a

*印があるところが今自分がいるブランチ

・git checkout
ブランチの切り替え
git checkout 既存ブランチ名
git checkout 新ブランチ名

ブランチを新規作成して切り替える
git checkout -b 新ブランチ名


・git pull
リモートディレクトリを取り込む
自分のいるディレクトリにマージされるので注意
git fetch + git merge と同じ

・git merge
変更を取り込む
取り込み方に３種類ある

fast foward
早送り

auto merge
基本的なマージ

もう一つは次回

