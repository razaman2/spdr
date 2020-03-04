import React, {Component} from 'react';

export default class Login extends Component {
    state = {username: '', password: ''};

    handleChange = (e) => {
        this.setState({[e.target.name]: e.target.value});
    };

    handleSubmit = (e) => {
        console.log('submitted:', this.state, e);
    };

    render () {
        return (
            <div style={{
                display: 'grid',
                placeItems: 'center'
            }}>
                <div style={{
                    display: 'flex',
                    flexDirection: 'column',
                    minWidth: '400px',
                    minHeight: '300px'
                }}>
                    <input
                        type={'text'}
                        name={'username'}
                        onChange={this.handleChange}
                        value={this.state.username}
                        placeholder={'username'}>
                    </input>

                    <input
                        type={'password'}
                        name={'password'}
                        onChange={this.handleChange}
                        value={this.state.password}
                        placeholder={'password'}>
                    </input>

                    <input
                        type={'button'}
                        onClick={this.handleSubmit}
                        value={'Submit'}>
                    </input>
                </div>
            </div>
        );
    }
}
