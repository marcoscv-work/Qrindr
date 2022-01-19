import React, { Component } from 'react';
import {FontAwesomeIcon} from "@fortawesome/react-fontawesome";
import {faGithub} from "@fortawesome/free-brands-svg-icons";
import Config from "../../../Config";
import {Link} from "react-router-dom";

interface GitHubState {
    URL: string;
    SHA: string;
    DATE: string;
    MSG: string;
}

class Home extends Component {

    state = {
        GitHub: {} as GitHubState,
        playerOne: '',
        playerTwo: '',
        matchGame: 0,
        matchCointoss: 0,
        matches: [] as any,
        statistics: [] as any
    };

    supported = [
        {
            key: 'quake',
            name: 'Quake Champions',
            url: 'https://quake.com/',
        },
        {
            key: 'diabotical',
            name: 'Diabotical',
            url: 'https://diabotical.com',
        },
        {
            key: 'csgo',
            name: 'Counter-Strike: Global Offensive',
            url: 'https://counter-strike.net'
        }
    ];

    componentDidMount() {
        fetch('https://api.github.com/repos/CameronCT/Qrindr/commits/v3')
            .then(response => response.json())
            .then(response => {
                this.setState({ GitHub: response.commit })
            });

        fetch(`${Config.apiUrl}/Home.php`)
            .then(response => response.json())
            .then(response => {
                this.setState({
                    blogs: response.Blogs,
                    matches: response.Matches,
                    GitHub: response.GitHub,
                    statistics: response.Statistics
                })
            });
    }


    render() {
        const { GitHub, matches, statistics } = this.state;

        return (
            <div className={"w-full lg:w-2/3 mx-auto"}>
                <div className={"content mx-2 my-6"}>
                    <div style={{ backgroundImage: "url('https://www.keencon.party/wp-content/uploads/2021/12/Keen-con-League.png')", backgroundSize: 'contain', backgroundRepeat: 'no-repeat', backgroundPosition: 'center center' }} className={"p-16 rounded shadow-md"}>
                    </div>
                    <div className={"text-center text-white font-bold pt-10"}>Qrindr - the <span className={"text-red-500"}>best</span> match creation tool adapted to Keen Con League </div>
                </div>
            </div>
        )
    }
}

export default Home;