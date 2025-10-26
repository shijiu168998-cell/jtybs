<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>JT 后台</title>
  <style>
    body {
      margin: 0; font-family: 'Inter', sans-serif; display: flex; justify-content: center; align-items: center;
      height: 100vh; background: linear-gradient(160deg, #0f172a 0%, #1e293b 100%); color: #e2e8f0; flex-direction: column;
    }
    h1 { margin-bottom: 20px; }
    button {
      padding: 12px 24px; border-radius: 8px; border: none; background: #7c3aed; color: #fff; font-size: 16px; cursor: pointer;
    }
    button:hover { opacity: 0.9; }
  </style>
</head>
<body>
  <h1>欢迎进入后台系统</h1>
  <button onclick="logout()">退出登录</button>

  <script>
    function logout() {
      alert('已退出登录');
      window.location.href = 'index.html';
    }
  </script>
</body>
</html>
