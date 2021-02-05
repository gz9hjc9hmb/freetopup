function changeReward(evt, otherClass) {
    var i, change_reward, change_reward_link;
    change_reward = document.getElementsByClassName("change_reward");
    for (i = 0; i < change_reward.length; i++) {
        change_reward[i].style.display = "none";
    }
    change_reward_link = document.getElementsByClassName("balance");
    for (i = 0; i < change_reward_link.length; i++) {
        change_reward_link[i].className = change_reward_link[i].className.replace(" balance-active", "");
    }
    document.getElementById(otherClass).style.display = "block";
    evt.currentTarget.className += " balance-active";
}
document.getElementById("defaultChangeReward").click();