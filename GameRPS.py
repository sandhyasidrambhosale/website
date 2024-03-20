import random
print("Welcome to RPS Game! 🤩")
def func():
    while True:
        user_action = input("\nEnter a choice (rock, paper, scissor): ")
        if user_action.lower() in ["rock", "paper", "scissor"]:
            possible_actions = ["rock", "paper", "scissor"]
            computer_action = random.choice(possible_actions)
            print(f"You chose {user_action}, computer chose {computer_action}.")
            if user_action.lower() == computer_action:
                print(f"Both players selected {user_action}.\nIt's a tie! 😅")
            elif user_action.lower() == "rock":
                if computer_action == "scissor":
                    print("Rock smashes scissors! You win! 😍")
                else:
                    print("Paper covers rock! You lose. 😥")
            elif user_action.lower() == "paper":
                if computer_action == "rock":
                    print("Paper covers rock! You win! 😍")
                else:
                    print("Scissors cuts paper! You lose.😥")
            elif user_action.lower() == "scissor":
                if computer_action == "paper":
                    print("Scissors cuts paper! You win! 😍")
                else:
                    print("Rock smashes scissors! You lose.😥")
    
            def check_play_again():
                play_again = input("\nPlay again? (y/n): ")
                if play_again.lower() == "y":
                    func()
                elif play_again.lower() == "n":
                    exit()
                else:
                    print("Invalid Input ❌")
                    check_play_again()
            check_play_again()
            break
        else:
            print("Invalid Input ❌")
func()