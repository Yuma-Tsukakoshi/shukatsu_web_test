import sys

# alpha = input() 
alpha = sys.argv[1]
cnt = 0
if alpha < 'A' or alpha > 'Z':
  print("standard error", file=sys.stderr)
  exit(1)

for i in range(ord(alpha),ord('Z')+1):
  cnt+=1
  print(chr(i),end="")

print()
print(cnt)
