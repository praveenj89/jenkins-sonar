pipeline {
    agent any

    stages {

        stage('Checkout') {
            steps {
                git 'https://github.com/praveenj89/jenkins-sonar.git'
            }
        }

        stage('SonarQube Analysis') {
            steps {
                withSonarQubeEnv('SonarQube') {
                    sh 'mvn clean verify sonar:sonar'
                }
            }
        }

    }
}
