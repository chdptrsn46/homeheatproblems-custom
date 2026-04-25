cd "C:\Users\duh\Documents\HomeHeatProblems website\homeheatproblems-custom"
git add .
$date = Get-Date -Format "yyyy-MM-dd"
$msg = Read-Host "Describe what changed (press Enter to use date only)"
if ($msg -eq "") { $msg = "Updates $date" }
git commit -m "[$date] $msg"
git push origin main
Write-Host "Done — changes saved to GitHub." -ForegroundColor Green
